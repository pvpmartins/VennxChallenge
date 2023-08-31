<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\ConfirmDeleteModal;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class ShowPost extends Component
{
    public $postId;
    public $showUpdateForm = false;
    public $showConfirmDeleteModal = false;

    

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function render()
    {
        $post = Post::findOrFail($this->postId);

        return view('livewire.show-post', compact('post'));
    }

    #[On('confirm-delete')]
    public function deletePost()
    {
        $post = Post::findOrFail($this->postId);

        if (Auth::check() && Auth::user()->id === $post->user_id) {
            $post->delete();
            session()->flash('success', 'Post deleted successfully!');
            
            return redirect()->route('user.posts');
        }
    }

    public function showUpdateForm()
    {
        $this->showUpdateForm = true;

        dd($this->showUpdateForm);
    }

    public function toggleUpdateForm()
    {
        $this->showUpdateForm = ! $this->showUpdateForm;
    }
    
    public function cancelUpdate()
    {
        $this->editing = false;
    }
    
    public function confirmDelete()
    {
        
        $this->emit('showConfirmDeleteModal');
    }
    
    #[On('cancel-deletion')] 
    public function toggleConfirmDeleteModal()
    {
        $this->showConfirmDeleteModal = ! $this->showConfirmDeleteModal;
    }
}

