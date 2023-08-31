<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class EditPost extends Component
{
    public $postId;
    public $title;
    public $description;
    public $img_url;

    public function mount($postId)
    {
        $this->postId = $postId;
        $post = Post::findOrFail($this->postId);
        $this->title = $post->title;
        $this->description = $post->description;
        $this->img_url = $post->img_url;
    }

    public function render()
    {
        return view('livewire.edit-post');
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'img_url' => 'required|url',
        ]);

        $post = Post::findOrFail($this->postId);

        if (Auth::check() && Auth::user()->id === $post->user_id) {
            $post->update([
                'title' => $this->title,
                'description' => $this->description,
                'img_url' => $this->img_url,
            ]);

            session()->flash('success', 'Post updated successfully!');
        }
    }
}
