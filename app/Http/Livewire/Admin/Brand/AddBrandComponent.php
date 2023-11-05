<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Carbon\Carbon;
class AddBrandComponent extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $name;
    public $logo;
    public $status;
    public $position;
    public $newlogo;
    public $b_id;
    protected $rules = [
        'name' => 'required',
        'status' => 'required',
        'position' => 'required'
    ];

    public function addBrand()
    {
        $this->validate();
        try {
            $brand = new Brand();
            $brand->name = $this->name;
            $brand->status = $this->status;
            $brand->position = $this->position;
            if ($this->logo) {
                $imageName = Carbon::now()->timestamp . '.' . $this->logo->extension();
                $this->logo->storeAs('assets/images/brand', $imageName);
                $brand->logo = $imageName;
               // unlink('assets/images' . '/' . $this->logo);
            }
            $brand->save();
            $this->alert('success', 'New Brand Has been added successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } catch (\Exception $e) {
            $this->alert('danger', $e->getMessage(), [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
    }
    public function deleteBrand($id)
    {
        try {
            Brand::destroy($id);
            $this->alert('success', 'Brand Has been deleted successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } catch (\Exception $e) {
            $this->alert('warning', $e->getMessage());
        }
    }
    public function updateStatus($id, $status)
    {
        try {
            $brand = Brand::find($id);
            $brand->status = $status;
            $brand->save();
            $this->alert('success', 'Brand status has been updated successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } catch (\Exception $e) {
            $this->alert('success', $e->getMessage());
        }
    }
    public function render()
    {
        $brands = Brand::orderBy('id', 'desc')->take(6)->get();
        return view('livewire.admin.brand.add-brand-component',['brands'=>$brands])->layout('layouts.admin');
    }
}
