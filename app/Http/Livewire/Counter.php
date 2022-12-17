<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    // Increment the number
    public function increment()
    {
        $this->count++;
    }
    // Decrement the number
    public function decrement()
    {
        $this->count--;
    }
}
