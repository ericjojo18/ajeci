<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\ContactForm;
use Livewire\Component;


class Contacts extends Component
{
    use WithPagination;
   
    public $name;
    public $phone;
    public $email;
    public $subject;
    public $message;
    public $contactformId = null;
    public $contactform;

    public $showModalForm = false;

    public function showCreatePostModal()
    {
        $this->showModalForm = true;

    }
    public function showEditPostModal($id)
    {
        $this->reset();
        $this->showModalForm = true;
        $this->contactformId = $id;
        $this->loadEditForm();
    }
    public function loadEditForm()
    {
        $contactform = Contactform::findOrFail($this->contactformId);
        $this->name = $contactform->name;
        $this->phone = $contactform->phone;
        $this->email = $contactform->email;
        $this->subject = $contactform->subject;
        $this->message = $contactform->message;
    }
    public function updatePost()
    {
        $this->validate([
            'name' =>'required',
            'phone' =>'required',
            'email' =>'required',
            'subject' =>'required',
            'message' =>'required',
        ]);

        Contactform::find($this->contactformId)->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ]);
        session()->flash('flash.banner', 'Article modifie Avec Succes');
        $this->reset();
        
    }
    public function deletePost($id)
    {
    $contactform = Contactform::find($id);
      session()->flash('flash.banner', 'Article Supprime Avec Succes');
      session()->flash('flash.bannerStyle', 'success');
      $post->delete();
    
    }
    public function render()
    {
        $contactforms =  Contactform::orderBy('created_at', 'DESC')->paginate(5);
        return view('livewire.contacts', compact('contactforms'));
    }
}
