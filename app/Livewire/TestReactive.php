<?php

namespace App\Livewire;

use Livewire\Component;

class TestReactive extends Component
{   
    public $test='';
    public function render()
    {
        return view('livewire.test-reactive');
    }
}
