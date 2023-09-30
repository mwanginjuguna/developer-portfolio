<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WelcomeAgain extends Component
{
    public function reloadPage()
    {
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.welcome-again');
    }
}
