<?php

namespace App\Http\Livewire\Kbk\Reviewer;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\KBK\History;
use App\Models\ArSys\Post;

class Idx extends Component
{
    public $tambah, $data;

    public function mount()
    {
        
    }

    public function render()
    {
        $this->data = History::orderBy('updated_at', 'desc')->take(2)->get();
        return view('livewire.kbk.reviewer.idx');
    }

    public function tambah()
    {
        foreach ($this->data as $item) {
            dd($item->id, $item->research->updated_at);
        }
    }
}
