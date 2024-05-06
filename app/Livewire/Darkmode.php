<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Darkmode extends Component
{
    public function render()
    {
      $darkmode = Auth::user()->darkmode;
        return view('livewire.darkmode',compact('darkmode'));
    }
    public function darkmodeToggle()
    {
        $user = Auth::user();
        if($user){
          $user->update(['darkmode' => !$user->darkmode]);         
        };
        return redirect(request()->header('Referer'));
    }
}
