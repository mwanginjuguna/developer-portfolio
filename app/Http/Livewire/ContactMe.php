<?php

namespace App\Http\Livewire;

use App\Mail\NewEmailReceived;
use App\Models\emails;
use Livewire\Component;

class ContactMe extends Component
{
    public $emails;
    public emails $email;
    public $sent = false;

    protected $rules = [
        'email.name' => 'required',
        'email.email' => 'required',
        'email.message' => 'required',
    ];

    public function mount()
    {
        $this->emails = emails::all();
        $this->email = new emails();
    }

    public function success()
    {
        $this->sent = true;
    }

    public function save()
    {
        $this->validate();
        $this->email->save();
        $this->success();
        //return redirect()->route('home')->with("success", "Thank you for your message. I will get back to you as soon as possible!");

        // \Mail::to('francis.kanothe@gmail.com')->queue(new NewEmailReceived($this->email));
    }
    public function render()
    {
        $this->email = new emails();
        return view('livewire.contact-me');
    }
}
