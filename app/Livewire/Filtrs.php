<?php

namespace App\Livewire;

use Livewire\Component;

class Filtrs extends Component
{
    //Adult counter
    public $adultCount = 0;
    public $childCount = 0;
    public $isOpen = false;
    public $selectedReiting = "";

    public function incrementAdult()
    {
        $this->adultCount++;
    }

    public function decrementAdult()
    {
        if ($this->adultCount > 0) {
            $this->adultCount--;
        }
    }

    //child Counter
    public function incrementChild()
    {
        $this->childCount++;
    }

    public function decrementChild()
    {
        if ($this->childCount > 0) {
            $this->childCount--;
        }
    }

    public function reitingDropdown() {

        $this->isOpen = !$this->isOpen;
    }

    public function selectReiting($reiting)
    {
        // some logic about selected reiting
        $this->selectedReiting = $reiting;
        $this->isOpen = false;
    }


    public function render()
    {
        return view('livewire.filtrs');
    }
}
