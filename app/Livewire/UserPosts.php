<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserPosts extends Component
{
    use WithPagination;

    public $selectedPostId;

    public function showPost($postId)
    {
        $this->selectedPostId = $postId;
    }

    public function render()
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        $posts = Post::where('user_id', $userId)->with('user')->paginate(6);

        return view('livewire.user-posts', ['posts' => $posts]);
    }
}
