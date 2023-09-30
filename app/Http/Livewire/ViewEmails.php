<?php

namespace App\Http\Livewire;

use App\Models\emails;
use Livewire\Component;

class ViewEmails extends Component
{
    public $emails;
    public $modalShow = false;

    public function reply()
    {
        $this->modalShow = true;
    }
    public function mount()
    {
        $this->emails = emails::query()->latest()->get();
    }
    public function render()
    {
        return view('livewire.view-emails');
    }
}
