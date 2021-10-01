<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Medias extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $titre;
    public $description;
    public $contenue;
    public $image;
    public $mediaId = null;
    public $newImage; 
    public $media;

    public $showModalForm = false;

    public function showCreatePostModal()
    {
        $this->showModalForm = true;

    }
    public function storePost()
    {
        $this->validate([
            'titre' =>'required',
            'image' =>'required|image|max:2024',
        ]);

        $image_name = $this->image->getClientOriginalName();
        $this->image->storeAs('public/photo/', $image_name); 
        $media = new Media();
        $media->user_id = auth()->user()->id;
        $media->titre = $this->titre;
        $media->slug = Str::slug($this->titre);  
        $media->image= $image_name;
        $media->save(); 
        $this->reset();
        session()->flash('flash.banner', 'Mediatheque créer Avec Succes');
    }
    public function showEditPostModal($id)
    {
        $this->reset();
        $this->showModalForm = true;
        $this->mediaId = $id;
        $this->loadEditForm();
    }
    public function loadEditForm()
    {
        $media = Media::findOrFail($this->mediaId);
        $this->titre = $media->titre;
        $this->newImage = $media->image;
    }
    public function updatePost()
    {
        $this->validate([
            'titre' =>'required',
            'image' =>'image|max:1024|nullable',
        ]);
        if($this->image){
            Storage::delete('public/photo/', $this->newImage );
            $this->newImage = $this->image->getClientOriginalName();
            $this->image->storeAs('public/photo/', $this->newImage);
        }

        Media::find($this->mediaId)->update([
            'titre' => $this->titre,
            'image' => $this->newImage 
        ]);
        session()->flash('flash.banner', 'Mediatheque modifie Avec Succes');
        $this->reset();
        
    }
    public function deletePost($id)
    {
      $media = Media::find($id);
      Storage::delete('public/photo/', $media->image);
      session()->flash('flash.banner', 'Mediatheque Supprime Avec Succes');
      session()->flash('flash.bannerStyle', 'success');
      $media->delete();
    
    }
    public function render()
    {
        return view('livewire.medias', [
            'medias' => Media::orderBy('created_at', 'DESC')->paginate(6),
        ]);
    }
}
