<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Homepage extends Component
{

    public $darkmode;

    public function mount()
    {
        $user = Auth::user();

        if ($user) {
            $this->darkmode = $user->darkmode;
        }
    }
    public function render()
    {


        return view('livewire.homepage',['darkmode' => $this->darkmode]);
    }
}
