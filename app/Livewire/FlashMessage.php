<?php

namespace App\Livewire;

use Livewire\Component;

class FlashMessage extends Component
{
    public $message;

    protected $listeners = ['flashMessage'];

    public function render()
    {
        return view('livewire.flash-message');
    }

}
