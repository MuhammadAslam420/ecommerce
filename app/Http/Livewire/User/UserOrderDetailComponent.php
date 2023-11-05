<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use App\Models\Seo;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserOrderDetailComponent extends Component
{
    public $order_id;

    public function mount($id)
    {
        $this->order_id=$id;
    }
    public function cancelOrder()
    {
        $order=Order::find($this->order_id);
        $order->status='cancel';
        $order->cancel_date=Carbon::today();
        $order->save();
        session()->flash('msg','Your Order Has Been Canceled Successfully!');
    }
    public function render()
    {
        $order=Order::find($this->order_id);
        $seo = Seo::where('page_name', 'user_order_detail')->firstOrFail();
        try {
            return view('livewire.user.user-order-detail-component',['order'=>$order])->layout('layouts.base', ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
