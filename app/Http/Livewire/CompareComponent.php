<?php

namespace App\Http\Livewire;

use App\Models\Seo;
use Livewire\Component;
use Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CompareComponent extends Component
{
    use LivewireAlert;
    protected $listeners=['refreshComponent'=>'$refresh'];
    public $color='d';
    public $size='d';

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setSize($size)
    {
        $this->size = $size;
    }
    public function moveProductFromCompareToCart($rowId)
    {
        $options=[
            'color'=>$this->color,
            'size'=>$this->size,
        ];
        $item = Cart::instance('compare')->get($rowId);
        Cart::instance('compare')->remove($rowId);
        $this->emitTo('compare-count-component', 'refreshComponent');
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price,$options)->associate('App\Models\Product');
        $this->emitTo('cart-count-component', 'refreshComponent');
        $this->alert('success','Product has been added to cart');


    }
    public function destroy($rowId)
    {
        Cart::instance('compare')->remove($rowId);
        $this->emitTo('compare-count-component', 'refreshComponent');
        $this->alert('success','Product has been removed from your compare');
    }
    public function render()
    {
        $seo = Seo::where('page_name', 'compare')->firstOrFail();
        try {
            return view('livewire.compare-component')->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
        
    }
}
