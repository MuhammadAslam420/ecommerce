<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use App\Models\Review;
use App\Models\OrderItem;
use App\Models\Seo;
use Carbon\Carbon;

class UserAddReviewComponent extends Component
{
    public $order_id;
    public $product_id;
    public $ratting;
    public $comment;
    protected $rules=[
        'ratting'=>'required',
        'comment'=>'required'
    ];
    public function mount($id,$product_id)
    {
        $this->order_id=$id;
        $this->product_id=$product_id;
    }

    public function addReview()
    {
        $this->validate();
        $order=Order::find($this->order_id);
        $review=new Review();
        $review->order_id=$this->order_id;
        $review->user_id=$order->user_id;
        $review->product_id=$this->product_id;
        $review->ratting=$this->ratting;
        $review->comment=$this->comment;
        $review->save();
        $item=OrderItem::where('order_id',$this->order_id)->where('product_id',$this->product_id)->first();
        $item->rstatus='1';
        $item->rdate=Carbon::today();
        $item->save();
        session()->flash('msg','Review Has Been Added Successfully!');

    }
    public function render()
    {
        $seo = Seo::where('page_name', 'user_add_review')->firstOrFail();
        try {
            return view('livewire.user.user-add-review-component')->layout('layouts.base', ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
