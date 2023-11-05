<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use Livewire\Component;
use App\Models\Attribute;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddAttributeComponent extends Component
{
    use LivewireAlert;
    public $product_id;
    public $size;
    public $color;
    protected $rules=[
        'size'=>'required',
        'color'=>'required',
        'product_id'=>'required'
    ];
    public function addAttribute()
    {
         $att=Attribute::where('product_id',$this->product_id)->where('size',$this->size)->where('color',$this->color)->first();
         if(!$att)
         {
            try{
                $att=new Attribute();
                $att->product_id=$this->product_id;
                $att->size=$this->size;
                $att->color=$this->color;
                $att->save();
                $this->alert('success','Attribute has been added');
            }catch(\Exception $e)
            {
                $this->alert('error', $e->getMessage(), [
                    'position' => 'center',
                    'timer' => 8000,
                    'toast' => false,
                    'timerProgressBar' => true,
                ]);
            }
         }else{
            $this->alert('error','This attribute Already exist', [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
         }
    }
    public function render()
    {
         $products=Product::all();
        return view('livewire.admin.product.attribute.add-attribute-component',['products'=>$products])->layout('layouts.admin');
    }
}
