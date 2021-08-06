<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithPagination;

class Mediat extends Component
{
    use WithPagination;
    public $media;
    public function render()
    {
        $medias = Media::paginate(6);
        return view('livewire.media', compact('medias'))->layout('layouts.base');
    }
}
