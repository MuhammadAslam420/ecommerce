<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BrandsComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    public function deleteBrand($id)
    {
        try{
            Brand::destroy($id);
            $this->alert('success','Brand Has been deleted successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }catch(\Exception $e)
        {
            $this->alert('warning',$e->getMessage());
        }
    }
    public function updateStatus($id,$status)
    {
         try{
            $brand = Brand::find($id);
            $brand->status = $status;
            $brand->save();
            $this->alert('success','Brand status has been updated successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
         }catch(\Exception $e)
         {
            $this->alert('success',$e->getMessage());

         }

    }
    public function render()
    {
        $brands=Brand::orderby('id','desc')->paginate(8);
        return view('livewire.admin.brand.brands-component',['brands'=>$brands])->layout('layouts.admin');
    }
}
