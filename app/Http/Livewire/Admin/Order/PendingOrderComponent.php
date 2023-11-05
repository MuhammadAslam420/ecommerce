<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Carbon\Carbon;

class PendingOrderComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $perPage;
    public $sorting='desc';
    public $sortBy = "pending";
    public $search;
    public function changeStatus($id,$status)
    {
        $order=Order::find($id);
        if($status==='cancel')
        {
            $order->status = $status;
            $order->cancel_date=Carbon::today();
        }elseif($status==='delivered')
        {
            $order->status = $status;
            $order->delivery_date = Carbon::today();

        }else{
            $order->status=$status;
        }
        $order->save();
        $this->alert('success','Status has been updated successfully!');
    }

    public function render()
    {
        $orders = Order::where('city','LIKE','%'.$this->search.'%')->where('status','pending')->orderBy('id', $this->sorting)->paginate($this->perPage);
        return view('livewire.admin.order.pending-order-component',['orders'=>$orders])->layout('layouts.admin');
    }
}
