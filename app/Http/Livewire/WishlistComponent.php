<?php

namespace App\Http\Livewire;

use App\Models\Seo;
use Livewire\Component;
use Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Livewire;

class WishlistComponent extends Component
{
    public $listeners = ['refreshComponent' => '$refresh'];
    use LivewireAlert;
    public $color='d';
    public $size='d';

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function moveProductFromWishlistToCart($rowId)
    {
        $options=[
            'color'=>$this->color,
            'size'=>$this->size,
        ];
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price,$options)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
        $this->alert('success','Product has been added to cart');

    }
    public function destroy($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);
        $this->emitTo('wishlist-count-component', 'refreshComponent');
        $this->alert('success','Product has been removed from your wishlist');
    }
    public function render()
    {
        $seo = Seo::where('page_name', 'wish_list')->firstOrFail();
        try {
            return view('livewire.wishlist-component')->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
