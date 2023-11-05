<?php

namespace App\Http\Livewire\Admin\Order;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Carbon\Carbon;

class OrdersComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $perPage;
    public $sorting='desc';
    public $sortBy;
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
        if($this->sortBy)
        {
            $orders = Order::where('city', 'LIKE', '%' . $this->search . '%')->where('status',$this->sortBy)->orderBy('id', $this->sorting)->paginate($this->perPage);
        }else{
            $orders = Order::where('city','LIKE','%'.$this->search.'%')->orderBy('id', $this->sorting)->paginate($this->perPage);

        }
        return view('livewire.admin.order.orders-component',['orders'=>$orders])->layout('layouts.admin');
    }
}
