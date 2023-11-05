<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use App\Models\Seo;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
class UserOrdersComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $orders=Order::where('user_id',Auth::user()->id)->paginate(10);
        $seo = Seo::where('page_name', 'user_orders')->firstOrFail();
        try {
            return view('livewire.user.user-orders-component',['orders'=>$orders])->layout('layouts.base', ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
