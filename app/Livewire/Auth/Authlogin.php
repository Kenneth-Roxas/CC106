<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Authlogin extends Component
{
    public $title = 'LanMar Website';
    public function render()
    {
        return view('livewire.auth.authlogin');
    }
}
