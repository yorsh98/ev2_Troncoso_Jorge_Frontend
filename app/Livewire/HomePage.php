<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.public')]
#[Title('Municipalidad de Cholchol')]
class HomePage extends Component
{
    public function render(): mixed
    {
        return view('livewire.home-page');
    }
}
