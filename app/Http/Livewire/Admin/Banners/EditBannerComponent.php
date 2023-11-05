<?php

namespace App\Http\Livewire\Admin\Banners;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class EditBannerComponent extends Component
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
    public $new_image;
    public $b_id;
    protected $rules=[
        'title'=>'required',
        'subtitle'=>'required',
        'status'=>'required',
        'position'=>'required',
        'link'=>'required',
    ];
    public function mount($id)
    {
        $this->b_id=$id;
        $banner=Banner::find($this->b_id);
        $this->title=$banner->title;
        $this->subtitle=$banner->subtitle;
        $this->link=$banner->link;
        $this->position=$banner->position;
        $this->image=$banner->image;
        $this->status=$banner->status;

    }
    public function addBanner()
    {
        $this->validate();
        try{
            $banner=Banner::find($this->b_id);
            $banner->title=$this->title;
            $banner->subtitle=$this->subtitle;
            $banner->link=$this->link;
            $banner->position=$this->position;
            $banner->status=$this->status;
          if($this->new_image)
          {
            $imageName = Carbon::now()->timestamp . '.' . $this->new_image->extension();
                $this->new_image->storeAs('assets/images', $imageName);
                $banner->image = $imageName;
          }
          $banner->save();
          $this->alert('success',' Banner has Been updated');

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
        return view('livewire.admin.banners.edit-banner-component')->layout('layouts.admin');
    }
}
