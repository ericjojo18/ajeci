<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class News extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::where('slug',$slug)->first();
    }
    public function render()
    {
        
        return view('livewire.news')->layout('layouts.base');
    }
    
}
