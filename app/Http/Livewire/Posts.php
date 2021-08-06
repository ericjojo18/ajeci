<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $titre; 
    public $description;
    public $contenue;
    public $image;
    public $postId = null;
    public $newImage; 
    public $post;

    public $showModalForm = false;

    public function showCreatePostModal()
    {
        $this->showModalForm = true;

    }
    public function storePost()
    {
        $this->validate([
            'titre' =>'required',
            'description' =>'required',
            'contenue' =>'required',
            'image' =>'required|image|max:1024',
        ]);

        $image_name = $this->image->getClientOriginalName();
        $this->image->storeAs('public/photos/', $image_name); 
        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->titre = $this->titre;
        $post->slug = Str::slug($this->titre);
        $post->description = $this->description;
        $post->contenue = $this->contenue;  
        $post->image= $image_name;
        $post->save(); 
        $this->reset();
        session()->flash('flash.banner', 'Article créer Avec Succes');
    }
    public function showEditPostModal($id)
    {
        $this->reset();
        $this->showModalForm = true;
        $this->postId = $id;
        $this->loadEditForm();
    }
    public function loadEditForm()
    {
        $post = Post::findOrFail($this->postId);
        $this->titre = $post->titre;
        $this->description = $post->description;
        $this->contenue = $post->contenue;
        $this->newImage = $post->image;
    }
    public function updatePost()
    {
        $this->validate([
            'titre' =>'required',
            'description' =>'required',
            'contenue' =>'required',
            'image' =>'image|max:1024|nullable',
        ]);
        if($this->image){
            Storage::delete('public/photos/', $this->newImage );
            $this->newImage = $this->image->getClientOriginalName();
            $this->image->storeAs('public/photos/', $this->newImage);
        }

        Post::find($this->postId)->update([
            'titre' => $this->titre,
            'description' => $this->description,
            'contenue' => $this->contenue,
            'image' => $this->newImage 
        ]);
        session()->flash('flash.banner', 'Article modifie Avec Succes');
        $this->reset();
        
    }
    public function deletePost($id)
    {
      $post = Post::find($id);
      Storage::delete('public/photos/', $post->image);
      session()->flash('flash.banner', 'Article Supprime Avec Succes');
      session()->flash('flash.bannerStyle', 'success');
      $post->delete();
    
    }
    public function render()
    { 
        return view('livewire.posts' , [
            'posts' => Post::orderBy('created_at', 'DESC')->paginate(10),
        ]);
    }
}
