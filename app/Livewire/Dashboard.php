<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $darkmode = Auth::user()->darkmode;
        return view('livewire.dashboard',compact('darkmode'));
    }
}
