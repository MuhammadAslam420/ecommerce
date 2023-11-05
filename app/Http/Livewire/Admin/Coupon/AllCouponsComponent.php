<?php

namespace App\Http\Livewire\Admin\Coupon;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Coupon;
use Livewire\WithPagination;
class AllCouponsComponent extends Component
{
    use WithPagination;
    use LivewireAlert;
    public function changeStatus($id,$status)
    {
        $cop=Coupon::find($id);
        $cop->status=$status;
        $cop->save();
        $this->alert('success','Coupon status has been changed Successfully');
    }
    public function deleteCoupon($id)
    {
      $cop=Coupon::find($id);
      $cop->delete();
      $this->alert('success','Coupon has been deleted Successfully');
    }
    public function render()
    {
        $coupons=Coupon::paginate(4);
        return view('livewire.admin.coupon.all-coupons-component',['coupons'=>$coupons])->layout('layouts.admin');
    }
}
