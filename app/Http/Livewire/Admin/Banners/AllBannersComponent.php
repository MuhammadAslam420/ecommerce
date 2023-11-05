<?php

namespace App\Http\Livewire\Admin\Banners;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AllBannersComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    public $sorting='desc';
    public $perPage=8;
    public $search;
    public function changeStatus($id,$status)
   {
        try{
            $banner=Banner::find($id);
            $banner->status=$status;
            $banner->save();
            $this->alert('success','Status update Successfully');
        }catch(\Exception $e)
        {
            $this->alert('error',$e->getMessage(),[
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        }
   }
   public function deleteBanner($id)
   {
    try{
        $banner=BAnner::find($id);
        $banner->delete();
        $this->alert('success','Banner Deleted Successfully');
    }catch(\Exception $e)
    {
        $this->alert('error',$e->getMessage(),[
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'timerProgressBar' => true,
        ]);
    }
   }
    public function render()
    {
        $banners=Banner::where('position','LIKE','%'.$this->search.'%')->orderBy('position',$this->sorting)->paginate($this->perPage);
        return view('livewire.admin.banners.all-banners-component',['banners'=>$banners])->layout('layouts.admin');
    }
}
