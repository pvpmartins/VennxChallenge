<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $img_url;
    public $successMessage = '';
    
    protected $rules = [
        'title' => 'required',
        'description' => 'required', // Adjust the max size as needed
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'img_url' => $this->img_url,
            'user_id' => Auth::id(),
        ]);

        session()->flash('message', 'Post created successfully!');

        // Clear input fields
        $this->title = '';
        $this->description = '';
        $this->img_url = '';
        $this->successMessage = 'Post created successfully!';
    }
    public function updated($propertyName)
    {
        if ($propertyName === 'successMessage') {
            $this->dispatchBrowserEvent('clear-success-message', ['delay' => 3000]); // Clear message after 3000 milliseconds (3 seconds)
        }
    }
}
