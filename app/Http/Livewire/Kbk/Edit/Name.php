<?php

namespace App\Http\Livewire\Kbk\Edit;

use App\Models\ArSys\Staff;
use Livewire\Component;

class Name extends Component
{
    public function mount()
    {
        $this->dosen=Staff::all();
    }
    public function render()
    {
        return view('livewire.kbk.edit.name');
    }
}
