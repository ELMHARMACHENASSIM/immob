<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public function render()
    {
        $darkmode = Auth::user()->darkmode;
        return view('livewire.chat' , compact('darkmode'));
    }
}
