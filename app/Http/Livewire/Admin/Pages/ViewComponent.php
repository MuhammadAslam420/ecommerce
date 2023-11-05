<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Page;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class ViewComponent extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $perPage;
    public $sorting='desc';
    public $search;

    public function pageDelete($id){
        try{
            $page = Page::where('id', $id)->first();
            $page->status = 2;
            $page->save();
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
            $pages = Page::where(function ($query) {
                $query->where('id', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('title', 'LIKE', '%' . $this->search . '%');
            })->where('status', 1)->orderBy('id', $this->sorting)->paginate(12);
        }else{
            $pages = Page::orderBy('id', $this->sorting)->where('status', 1)->paginate($this->perPage);
        }
        
        return view('livewire.admin.pages.view-component', ['pages' => $pages])->layout('layouts.admin');
    }
}
