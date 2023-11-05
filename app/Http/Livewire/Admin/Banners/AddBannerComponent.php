<?php

namespace App\Http\Livewire\Admin\Banners;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class AddBannerComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $image;
    public $status;
    public $position;
    public $link;
    protected $rules=[
        'title'=>'required',
        'subtitle'=>'required',
        'image'=>'required',
        'status'=>'required',
        'position'=>'required',
        'link'=>'required',
    ];
    public function addBanner()
    {
        $this->validate();
        try{
            $banner=new Banner();
            $banner->title=$this->title;
            $banner->subtitle=$this->subtitle;
            $banner->link=$this->link;
            $banner->position=$this->position;
            $banner->status=$this->status;
          if($this->image)
          {
            $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
                $this->image->storeAs('assets/images', $imageName);
                $banner->image = $imageName;
          }
          $banner->save();
          $this->alert('success','New Banner has Been Added');

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
        return view('livewire.admin.banners.add-banner-component')->layout('layouts.admin');
    }
}
