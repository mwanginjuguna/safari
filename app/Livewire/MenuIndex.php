<?php

namespace App\Livewire;

use Livewire\Component;

class MenuIndex extends Component
{
    public $menu;

    public string $search;
    
    public function render()
    {
        return view('livewire.menu-index');
    }
}
