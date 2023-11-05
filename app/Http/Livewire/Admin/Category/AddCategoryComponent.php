<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PhpParser\Node\Stmt\TryCatch;

class AddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $logo;

    protected $rules=[
        'name'=>'required',
        'slug'=>'required|unique:categories',
        'logo'=> 'required|mimes:jpeg,jpg,png'
    ];
    public function generateslug()
    {
        $this->slug = Str::slug($this->name, '-');
    }
    public function addCategory()
    {
        $this->validate();
        try
        {
            $category = new Category();
            $category->name = $this->name;
            $category->slug = $this->slug;
            if ($this->logo) {
                $imageName = Carbon::now()->timestamp . '.' . $this->logo->extension();
                $this->logo->storeAs('assets/images/category', $imageName);
                $category->logo = $imageName;
            } else {
                session()->flash('msg', 'Category Image/Logo is missing');
            }
            $category->save();
            session()->flash('msg', 'Category has been added successfully!');
            $this->name='';
            $this->slug='';
        } catch (\Exception $e)
        {
             return redirect()->route('error');

        }

    }
    public function updateStatus($id,$status)
    {
        try{
             $category=Category::find($id);
             $category->status=$status;
             $category->save();
            session()->flash('msg', 'Category status has been updated successfully!');

        }catch(\Exception $e)
        {
            session()->flash('err', 'Ops something went wrong status has been not updated!');
        }
    }
    public function deleteCategory($id)
    {
        try {
            $category = Category::find($id);
            $category->delete();
            session()->flash('msg', 'Category has been deleted successfully!');
        } catch (\Exception $e) {
            session()->flash('err', 'Ops something went wrong category has been not deleted!');
        }
    }
    public function render()
    {
        $categories=Category::orderBy('id','desc')->limit(5)->get();
        return view('livewire.admin.category.add-category-component',['categories'=> $categories])->layout('layouts.admin');
    }
}
