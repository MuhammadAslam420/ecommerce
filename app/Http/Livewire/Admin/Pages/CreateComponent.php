<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Page;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateComponent extends Component
{

    use LivewireAlert;
    public $page_id;
    public $title;
    public $content;

    protected $rules = [
        'page_id' => 'required|numeric|unique:pages,id',
        'title' => 'required|string',
        'content' => 'required',
    ];

    public function addPage()
    {
        $this->validate();
        try {
            $page = new Page();
            $page->id = $this->page_id;
            $page->title = $this->title;
            $page->content = $this->content;
            $page->save();
            $this->alert('success', 'New Page has been added successfully!', [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
            // $this->reset(['page_name', 'title', 'type', 'url']);
            $this->page_id = '';
            $this->title = '';
            $this->content = '';
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.pages.create-component')->layout('layouts.admin');
    }
}
