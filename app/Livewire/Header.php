<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
    
        $user = Auth::user();
        if($user){
        $darkmode = Auth::user()->darkmode;
        } else{
            $darkmode = false;
        }
      
        
        return view('livewire.header',compact('user','darkmode'));
    }
}
