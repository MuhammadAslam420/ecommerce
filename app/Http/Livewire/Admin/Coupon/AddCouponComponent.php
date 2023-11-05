<?php

namespace App\Http\Livewire\Admin\Coupon;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Coupon;

class AddCouponComponent extends Component
{
    use LivewireAlert;
    public $name;
    public $coupon_value;
    public $cart_value;
    public $type;
    public $status;
    public $end;
    protected $rules=[
             'name'=>'required',
             'coupon_value'=>'required',
             'cart_value'=>'required',
             'type'=>'required',
             'status'=>'required',
             'end'=>'required',
    ];
    public function addCoupon()
    {
        try{
            $cop=new Coupon();
        $cop->name=$this->name;
        $cop->coupon_value=$this->coupon_value;
        $cop->cart_value=$this->cart_value;
        $cop->type=$this->type;
        $cop->status=$this->status;
        $cop->end=$this->end;
        $cop->save();
        $this->alert('success','The Coupon Has been Added Successfuly!');
        }catch(\Exception $e)
        {
          $this->alert('error',$e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.coupon.add-coupon-component')->layout('layouts.admin');
    }
}
