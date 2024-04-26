<?php

namespace App\Livewire;

use App\Models\City;
use Livewire\Component;

class Signup extends Component
{
    public function render()
    {
        $cities = City::all();
        return view('livewire.signup', compact('cities'));
    }
}
