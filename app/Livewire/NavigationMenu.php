<?php

namespace App\Livewire;

use Livewire\Component;

class NavigationMenu extends Component
{
    public bool $isOpen = false;

    /**
     * @var array<int, array{label: string, href: string}>
     */
    public array $items = [];

    public function mount(): void
    {
        $this->items = [
            ['label' => 'Inicio', 'href' => '#inicio'],
            ['label' => 'Servicios', 'href' => '#servicios'],
            ['label' => 'Noticias', 'href' => '#noticias'],
            ['label' => 'Contacto', 'href' => '#contacto'],
        ];
    }

    public function toggleMenu(): void
    {
        $this->isOpen = ! $this->isOpen;
    }

    public function closeMenu(): void
    {
        $this->isOpen = false;
    }

    public function render(): mixed
    {
        return view('livewire.navigation-menu');
    }
}
