<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CategoriesComponent extends Component
{
    use LivewireAlert;
    use WithPagination;
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
                'timerProgressBar' =>true,
                ]);
        } catch (\Exception $e) {
            $this->alert('error',$e->getMessage(), [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        }
    }
    public function deleteCategory($id)
    {
        try {
            $category = Category::find($id);
            unlink('assets/images/category'.'/'.$category->logo);
            $category->delete();
            $this->alert('success', 'Category status has been deleted successfully!', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
            ]);
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage(), [
                'position' => 'center',
                'timer' => 8000,
                'toast' => false,
                'timerProgressBar' => false,
            ]);
        }
    }
    public function render()
    {
        $categories=Category::orderBy('id','desc')->paginate(12);
        return view('livewire.admin.category.categories-component',['categories'=>$categories])->layout('layouts.admin');
    }
}
