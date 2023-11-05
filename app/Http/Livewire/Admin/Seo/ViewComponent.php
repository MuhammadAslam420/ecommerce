<?php

namespace App\Http\Livewire\Admin\Seo;

use Livewire\Component;
use App\Models\Seo;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ViewComponent extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $perPage;
    public $sorting='desc';
    public $search;

    public function seoDelete($id){
        try{
            $seo = Seo::where('id', $id)->first();
            $seo->status = 2;
            $seo->save();
            $this->alert('success', 'SEO has been removed!', [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }

    public function render()
    {
        if($this->search){
            $seos = Seo::where(function ($query) {
                $query->where('page_name', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('title', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('type', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('url', 'LIKE', '%' . $this->search . '%');
            })->where('status', 1)->orderBy('id', $this->sorting)->paginate(12);
        }else{
            $seos = Seo::orderBy('id', $this->sorting)->where('status', 1)->paginate($this->perPage);
        }
        
        return view('livewire.admin.seo.view-component', ['seos' => $seos])->layout('layouts.admin');
    }
}
