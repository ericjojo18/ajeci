<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

use Livewire\WithPagination;
class Newsroom extends Component
{
    use WithPagination;
   
    public $post;
    public function render() 
    {
        $posts =  Post::paginate("3");
        return view('livewire.newsroom', compact('posts'))->layout('layouts.base');
    }
    protected $paginationTheme = 'bootstrap';
   
}
