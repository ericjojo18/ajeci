<?php

namespace App\Http\Livewire;

use App\Mail\Email;
use Livewire\Component;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Mail;

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
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|digits:10',
        'subject' => 'required|min:10',
        'message' => 'required'
    ];

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
        Mail::to('info@ajeci-ci.org')->send(new Email($this->name,$this->email,$this->phone ,$this->subject,$this->message));
       
       session()->flash('success', 'Nous avons bien reçu votre message, nous vous ferons un retour très bientôt. Merci de nous avoir contacté ! ');
       return redirect()->to('/contact');
       
    }
   
        
   
    public function render()
    {
        
        
        return view('livewire.show-posts')->layout('layouts.base');
    }
}
