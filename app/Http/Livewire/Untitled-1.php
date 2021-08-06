<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\ContactForm;
use Livewire\Component;


class Contacts extends Component
{
    use WithPagination;
    
    public $contactform;
    public $showModalForm = false; 
    

    public function showCreatePostModal($id)
    {
        
        $this->showModalForm = true;
        $this->contactform  = $id;   
    }
   
    public function return()
    {
        $this->showModalForm = true;
        $this->reset();
        $this->loadEditForm();

    }
    public function render()
    {
        $contactforms =  Contactform::orderBy('created_at', 'DESC')->paginate(5);
        return view('livewire.contacts', compact('contactforms'));
    }
}