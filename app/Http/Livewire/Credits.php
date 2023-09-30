<?php

namespace App\Http\Livewire;

use App\Models\GarveyQuotes;
use Livewire\Component;

class Credits extends Component
{
    public $garveyQuotes;

    public function mount()
    {
        $this->garveyQuotes = GarveyQuotes::all() ?? null;
    }
    public function render()
    {
        return view('livewire.credits');
    }
}
