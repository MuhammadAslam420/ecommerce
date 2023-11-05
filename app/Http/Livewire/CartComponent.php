<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Coupon;
use App\Models\SaleOn;
use App\Models\Country;
use App\Models\Seo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CartComponent extends Component
{
    use LivewireAlert;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public $couponCode;
    public $discount;
    public $subtotalAfterDiscount;
    public $totalAfterDiscount;
    public $taxAfetrDiscount;
    public $country_id;
    public $shipping_charges;
    public $charges;
    public function updateCart()
    {
        return;
    }
    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->alert('success','Product quantity increases');

    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
        $this->emitTo('cart-count-component', 'refreshComponent');
        $this->alert('success','Product quantity decreases');

    }
    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        $this->emitTo('cart-count-component', 'refreshComponent');
        $this->alert('success','Product has been removed from your cart');
    }
    public  function applyCouponCode()
    {

        $coupon = Coupon::where('name', $this->couponCode)->where('end', '>=', Carbon::today())->where('cart_value', '<=', Cart::instance('cart')->subtotal())->first();
        if ($coupon) {
            session()->put('coupon', [
                'code' => $coupon->name,
                'type' => $coupon->type,
                'value' => $coupon->coupon_value,
                'cart_value' => $coupon->cart_value
            ]);
        }
        else{
            $this->alert('error','coupon has invalid');

        }
        $this->alert('success','coupon Applied successfully');
        return;
    }
    public function applyShippingCharges()
    {

        $country = Country::find($this->country_id);
        if($country)
        {
            $this->shipping_charges = $country->charges;
            session()->put('country', [
                'charges' => $this->shipping_charges
            ]);
        }else{
            $this->shipping_charges=200;
            session()->put('country', [
                'charges' => $this->shipping_charges
            ]);
        }
        $this->charges = session()->get('country')['charges'];
    }
    public function calculateDiscount()
    {
        if (session()->has('coupon')) {
            if (session()->get('coupon')['type'] == 'fixed') {
                $this->discount = session()->get('coupon')['value'];
            } else {
                $this->discount = (Cart::instance('cart')->subtotal() * session()->get('coupon')['value']) / 100;
            }
            $this->subtotalAfterDiscount = Cart::instance('cart')->subtotal() - $this->discount;
            $this->taxAfetrDiscount = ($this->subtotalAfterDiscount * config('cart.tax')) / 100;
            $this->totalAfterDiscount = $this->subtotalAfterDiscount + $this->taxAfetrDiscount + $this->charges;
        }
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
    }
    public function checkout()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            return redirect()->route('checkout');
        }
    }
    public function setAmountForCheckout()
    {
        if (!Cart::instance('cart')->count() > 0) {
            session()->forget('checkout');
            return;
        }
        if (session()->has('coupon')) {
            session()->put('checkout', [
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfetrDiscount,
                'total' => ($this->totalAfterDiscount + $this->charges)
            ]);
        } else {
            session()->put('checkout', [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => (Cart::instance('cart')->total() + $this->shipping_charges)
            ]);
        }
    }
    public function render()
    {
        if (session()->has('coupon')) {
            if (Cart::instance('cart')->subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
                session()->forget('country');
            } else {
                $this->calculateDiscount();
            }
        }
        $sale = SaleOn::find(1);
        $this->setAmountForCheckout();
        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
        }
        $countries = Country::all();

        $seo = Seo::where('page_name', 'cart')->firstOrFail();
        try {
            return view('livewire.cart-component', ['countries' => $countries])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
