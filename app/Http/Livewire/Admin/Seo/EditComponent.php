<?php

namespace App\Http\Livewire\Admin\Seo;

use Livewire\Component;
use App\Models\Seo;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Validation\Rule;
use App\Rules\UniquePageName;

class EditComponent extends Component
{
    use LivewireAlert;

    public $page_name;
    public $title;
    public $type;
    public $url;
    public $description;
    public $seo_id;

    protected function rules()
    {
        return [
            'page_name' => ['required', 'string', new UniquePageName($this->seo_id)],
            'title' => 'required|string',
            'type' => 'required',
            'url' => 'required',
            'description' => 'required',
        ];
    }

    // protected $rules = [
    //     'page_name' => ['required','string',Rule::unique("seos")->ignore($this->seo_id)],
    //     'title' => 'required|string',
    //     'type' => 'required',
    //     'url' => 'required',
    //     'description' => 'required',
    // ];
    
    public function mount($id){
        $this->seo_id = $id;
        $seo = Seo::where('id', $id)->first();
        $this->page_name = $seo->page_name;
        $this->title = $seo->title;
        $this->type = $seo->type;
        $this->url = $seo->url;
        $this->description = $seo->description;
    }

    public function updateSeo()
    {
        $this->validate();
        try {
            $seo = Seo::find($this->seo_id);
            $seo->page_name = $this->page_name;
            $seo->title = $this->title;
            $seo->type = $this->type;
            $seo->url = $this->url;
            $seo->description = $this->description;
            $seo->save();
            $this->alert('success', 'SEO has been updated successfully!', [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
            // $this->reset(['page_name', 'title', 'type', 'url']);
            // $this->description = '';
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.seo.edit-component')->layout('layouts.admin');
    }
}
