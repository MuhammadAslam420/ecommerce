<?php

namespace App\Http\Livewire\Admin\Seo;

use App\Models\Seo;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateComponent extends Component
{
    use LivewireAlert;
    public $page_name;
    public $title;
    public $type;
    public $url;
    public $description;

    protected $rules = [
        'page_name' => 'required|string|unique:seos',
        'title' => 'required|string',
        'type' => 'required',
        'url' => 'required',
        'description' => 'required',
    ];

    public function addSeo()
    {
        $this->validate();
        try {
            $seo = new Seo();
            $seo->page_name = $this->page_name;
            $seo->title = $this->title;
            $seo->type = $this->type;
            $seo->url = $this->url;
            $seo->description = $this->description;
            $seo->save();
            $this->alert('success', 'New SEO has been added successfully!', [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
            // $this->reset(['page_name', 'title', 'type', 'url']);
            $this->page_name = '';
            $this->title = '';
            $this->type = '';
            $this->url = '';
            $this->description = '';
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.seo.create-component')->layout('layouts.admin');
    }
}
