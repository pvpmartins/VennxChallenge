<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class GlobalPosts extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::with('user')->paginate(6); 
        
        // dd($posts);
        return view('livewire.global-posts', ['posts' => $posts]);
    }
}
