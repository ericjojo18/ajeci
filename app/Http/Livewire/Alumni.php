<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alumni extends Component
{
    public function render()
    {
        return view('livewire.alumni')->layout('layouts.base');
    }
}
