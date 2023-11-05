<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Order;
use App\Models\Seo;
use Carbon\Carbon;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class UserDashboardComponent extends Component
{
    use WithPagination;
    public $order_id;
    public $email;

    protected $rules=[
        'order_id'=>'required|integer',
        'email'=>'required|email'
    ];
    public function trackOrder()
    {
        $this->validate();
        $status=Order::where('id',$this->order_id)->where('email',$this->email)->first();
        if($status)
        {
            session()->flash('status', "Your Order Status $status->status");
        }
        else
        {
            session()->flash('status', "Your Order information is not correct!");
        }
         // return view('livewire.user.user-dashboard-component',['status'=>$status])->layout('layouts.base');

    }
    public function render()
    {
        $cost=Order::where('user_id',Auth::user()->id)->sum('total');
        $today_cost=Order::where('user_id',Auth::user()->id)->where('created_at',Carbon::today())->sum('total');
        $today_orders=Order::where('user_id',Auth::user()->id)->where('created_at',Carbon::today())->count();
        $totalorders=Order::where('user_id',auth::user()->id)->count();

        $orders=Order::where('user_id',Auth::user()->id)->orderBy('id','DESC')->take(10)->get();
        $seo = Seo::where('page_name', 'user_dashboard')->firstOrFail();
        try {
            return view('livewire.user.user-dashboard-component',['today_cost'=>$today_cost,'today_orders'=>$today_orders,'totalorders'=> $totalorders,'orders'=>$orders,'cost'=>$cost])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
    }
}
