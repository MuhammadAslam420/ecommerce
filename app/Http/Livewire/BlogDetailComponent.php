<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Seo;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class BlogDetailComponent extends Component
{
    use LivewireAlert;
    public $slug;
    public $name;
    public $email;
    public $contact;
    public $comment;
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'contact' => 'required',
        'comment' => 'required'
    ];

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function addComment()
    {
        $this->validate();
        try {
            $blog = Blog::where('slug', $this->slug)->first();
            $msg = new BlogComment();
            $msg->blog_id = $blog->id;
            $msg->name = $this->name;
            $msg->email = $this->email;
            $msg->contact = $this->contact;
            $msg->comment = $this->comment;
            $msg->save();
            $this->alert('success', 'Comment has been added successfully');
            $this->reset();
        } catch (\Exception $e) {
            $this->alert('error', $e->getMessage(), [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
    }
    public function render()
    {
        $blog = Blog::where('slug', $this->slug)->increment('views', 1);
        $blog = Blog::where('slug', $this->slug)->first();
        $shareButtons = \Share::page(
            'http://127.0.0.1:8000/blog-detail/' . $blog->slug,
            '' . $blog->title,
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();
        $seo = Seo::where('page_name', 'blog_detail')->firstOrFail();
        try {
            return view('livewire.blog-detail-component', ['blog' => $blog, 'shareButtons' => $shareButtons])->layout("layouts.base", ['seo' => $seo]);
        } catch (\Exception $e) {
            // $this->alert('error',$e->getMessage());
            return view('livewire.admin.error-component')->layout("layouts.base");
        }
    }
}
