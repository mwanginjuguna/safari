<?php

namespace App\Livewire\Welcome;

use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class Hero extends Component
{
    /**
     * Reserve a table at the restaurant
     */
    public function makeReservation(): RedirectResponse
    {
        return back()->with('Success', 'Your table has been reserved.');
    }

    public function render()
    {
        return view('livewire.welcome.hero');
    }
}
