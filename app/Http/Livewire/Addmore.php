<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Addmore extends Component
{
    public $entry = 0;
    public function increment()
    {
        $this->entry++;
    }

    public function render()
    {
        return view('livewire.addmore');
    }
}
