<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class EditCategoryComponent extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $name;
    public $slug;
    public $logo;
    public $status;
    public $newlogo;
    public $cat_slug;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
        'status'=>'required'
    ];
    public function mount($slug)
    {
        $this->cat_slug=$slug;
      $category=Category::where('slug',$slug)->first();
      $this->name=$category->name;
      $this->slug=$category->slug;
      $this->logo=$category->logo;
      $this->status = $category->status;
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
    public function UpdateCategory()
    {
        $this->validate();
        try {
            $category = Category::where('slug',$this->cat_slug)->first();
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->status=$this->status;
            if ($this->newlogo) {
                $imageName = Carbon::now()->timestamp . '.' . $this->newlogo->extension();
                $this->newlogo->storeAs('assets/images/category', $imageName);
                $category->logo = $imageName;
                unlink('assets/images' . '/' . $this->logo);
            } else {
                $this->alert('warning', 'Category Image is missing!', [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                ]);
            }
            $category->save();
            $this->alert('success', 'Category status has been updated successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);

        } catch (\Exception $e) {
            return redirect()->route('error');
        }
    }
    public function updateStatus($id, $status)
    {
        try {
            $category = Category::find($id);
            $category->status = $status;
            $category->save();
            $this->alert('success', 'Category status has been updated successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } catch (\Exception $e) {
            $this->alert('warning',
                $e->getMessage(), [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
    }
    public function deleteCategory($id)
    {
        try{
            $category=Category::find($id);
            $category->delete();
            $this->alert('success', 'Category status has been updated successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);

        } catch (\Exception $e) {
            $this->alert('warning',
                $e->getMessage(), [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
    }

    public function render()
    {
        $categories = Category::orderBy('id', 'desc')->limit(5)->get();
        return view('livewire.admin.category.edit-category-component',['categories'=> $categories])->layout('layouts.admin');
    }
}
