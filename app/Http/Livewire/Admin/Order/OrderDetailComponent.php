<?php

namespace App\Http\Livewire\Admin\Order;


use Livewire\Component;
use App\Models\Order;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Carbon\Carbon;
use App\Models\Transaction;
class OrderDetailComponent extends Component
{
    use LivewireAlert;
    public $order_id;
    public function mount($id)
    {
      $this->order_id=$id;
    }
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
            $transaction=Transaction::where('order_id',$id)->first();
            $transaction->status='paid';
            $transaction->save();
        }else{
            $order->status=$status;

        }

        $order->save();
        $this->alert('success','Status has been updated successfully!');


    }
    public function render()
    {
        $order=Order::find($this->order_id);
        return view('livewire.admin.order.order-detail-component',['order'=>$order])->layout('layouts.admin');
    }
}
