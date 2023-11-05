<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\HomePageSetting;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class HomePageSettingComponent extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $name;
    public $web_logo;
    public $mobile_logo;
    public $footer_logo;
    public $m_footer_logo;
    public $n_web_logo;
    public $n_mobile_logo;
    public $n_footer_logo;
    public $n_m_footer_logo;
    public $hotline;
    public $mobile;
    public $email;
    public $facebook;
    public $youtube;
    public $twitter;
    public $instagram;
    public $pinterest;
    public $app_store;
    public $play_store;
    public $map;
    public $address;
    public function mount()
    {
            $setting=HomePageSetting::first();
            $this->name=$setting->name;
            $this->web_logo=$setting->web_logo;
            $this->mobile_logo=$setting->mobile_logo;
            $this->footer_logo=$setting->footer_logo;
            $this->m_footer_logo=$setting->m_footer_logo;
            $this->hotline=$setting->hotline;
            $this->mobile=$setting->mobile;
            $this->email=$setting->email;
            $this->facebook=$setting->facebook;
            $this->youtube=$setting->youtube;
            $this->twitter=$setting->twitter;
            $this->instagram=$setting->instagram;
            $this->pinterest=$setting->pinterest;
            $this->app_store=$setting->app_store;
            $this->play_store=$setting->play_store;
            $this->map=$setting->map;
            $this->address=$setting->address;

    }
    public function updateSetting()
    {
        $setting=HomePageSetting::first();
        $setting->name= $this->name;
        $setting->hotline= $this->hotline;
        $setting->mobile= $this->mobile;
        $setting->email= $this->email;
        $setting->facebook= $this->facebook;
        $setting->youtube= $this->youtube;
        $setting->twitter= $this->twitter;
        $setting->instagram= $this->instagram;
        $setting->pinterest= $this->pinterest;
        $setting->app_store= $this->app_store;
        $setting->play_store= $this->play_store;
        $setting->map= $this->map;
        $setting->address= $this->address;
        if($this->n_web_logo)
        {
            $imageName = Carbon::now()->timestamp . '.' . $this->n_web_logo->extension();
            $this->n_web_logo->storeAs('assets/images', $imageName);
            $setting->web_logo = $imageName;
        }
        if($this->n_mobile_logo)
        {
            $imageName = Carbon::now()->timestamp . '.' . $this->n_mobile_logo->extension();
            $this->n_mobile_logo->storeAs('assets/images', $imageName);
            $setting->mobile_logo = $imageName;
        }
        if($this->n_footer_logo)
        {
            $imageName = Carbon::now()->timestamp . '.' . $this->n_footer_logo->extension();
            $this->n_footer_logo->storeAs('assets/images', $imageName);
            $setting->footer_logo = $imageName;
        }
        if($this->n_m_footer_logo)
        {
            $imageName = Carbon::now()->timestamp . '.' . $this->n_m_footer_logo->extension();
            $this->n_m_footer_logo->storeAs('assets/images', $imageName);
            $setting->m_footer_logo = $imageName;
        }
        $setting->save();
        $this->alert('success','Setting has been updated successfully');

    }
    public function render()
    {

        return view('livewire.admin.home.home-page-setting-component')->layout('layouts.admin');
    }
}
