<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\SaleOn;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class SaleONComponent extends Component
{
    use LivewireAlert;
    public $start;
    public $end;
    public $status;

    public function mount()
    {
        $sale=SaleOn::find(1);
        $this->start=$sale->start;
        $this->end=$sale->end;
        $this->status=$sale->status;
    }
    public function updateSale()
    {
        try{
            $sale=SaleOn::find(1);
           $sale->start= $this->start;
           $sale->end= $this->end;
           $sale->status= $this->status;
            $sale->save();
            $this->alert('success','Sale On Timer Updated');
        }catch(\Exception $e)
        {
            $this->alert('error',$e->getMessage(), [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        }
    }
    public function render()
    {
        return view('livewire.admin.home.sale-o-n-component')->layout('layouts.admin');
    }
}
