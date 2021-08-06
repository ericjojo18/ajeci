<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;

class ContactForms extends Component
{
    
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $contactform;
    
    
    public function updated($fiels)
    {
        $this->validateOnly($fiels,[
            'name' => 'required',
            'email'=> 'required|email',
            'phone' => 'required|digits:10',
            'subject' => 'required|min:10',
            'message' => 'required'

        ]);
    }


    public function submit()
    {
        $this->validate([
           'name' => 'required',
           'email'=> 'required|email',
           'phone' => 'required|digits:10',
           'subject' => 'required|min:10',
           'message' => 'required' 
       ]);
        
       Contactform::create([
        'name' => $this->name,
        'email' => $this->email,
        'phone' => $this->phone,
        'subject' => $this->subject,
        'message' => $this->message,
       
        ]);
       
       session()->flash('success', 'Nous avons bien reçu votre message et vous remercions de nous avoir écrit.');
       return redirect()->to('/contact');
       
    }
    public function render()
    {
        
        return view('livewire.show-posts')->layout('layouts.base');
    }
}
