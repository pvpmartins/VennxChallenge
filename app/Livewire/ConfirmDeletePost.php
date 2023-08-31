<?php

namespace App\Livewire;

use Livewire\Component;

class ConfirmDeletePost extends Component
{
    public $showConfirmDeleteModal = false;

    public function confirmDelete()
    {
        $this->dispatch('confirm-delete');
    }

    public function cancelDeletion()
    {
        $this->dispatch('cancel-deletion');
    }

    public function render()
    {
        return view('livewire.confirm-delete-post');
    }
}
