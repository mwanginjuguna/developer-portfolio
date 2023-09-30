<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public function reloadPage()
    {
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.welcome');
    }
}
