<?php

namespace App\Livewire;

use Livewire\Component;

class MenuLoader extends Component
{
    public array $menus = [
        'breakfast' => false,
        'lunch' => false,
        'dinner' => false,
        'starters' => false,
        'beverages' => false
    ];

    public function loadmenu(string $menu)
    {
        // set the current menu to true, and toggle the rest to false
        foreach ($this->menus as $key => $value) {
            if($key === $menu) {
                $value = true;
            } else {
                $value = false;
            }

            $this->menus[$key] = $value;
        }
    }

    public function mount() {
        $this->loadmenu('breakfast');
    }

    public function render()
    {
        return view('livewire.menu-loader');
    }
}
