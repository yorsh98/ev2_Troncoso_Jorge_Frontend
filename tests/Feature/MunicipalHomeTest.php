<?php

use App\Livewire\ContactForm;
use App\Livewire\NavigationMenu;
use App\Livewire\NewsSection;
use App\Livewire\ServiceDirectory;
use Livewire\Livewire;

it('renders the municipal home page', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('Municipalidad de Cholchol')
        ->assertSeeLivewire(NavigationMenu::class)
        ->assertSeeLivewire(ServiceDirectory::class)
        ->assertSeeLivewire(NewsSection::class)
        ->assertSeeLivewire(ContactForm::class);
});

it('opens and closes the responsive navigation menu', function () {
    Livewire::test(NavigationMenu::class)
        ->assertSet('isOpen', false)
        ->call('toggleMenu')
        ->assertSet('isOpen', true)
        ->call('closeMenu')
        ->assertSet('isOpen', false);
});

it('filters municipal services and changes the selected detail', function () {
    Livewire::test(ServiceDirectory::class)
        ->assertSee('8 servicios encontrados')
        ->set('search', 'transparencia')
        ->assertSee('1 servicios encontrados')
        ->assertSee('Transparencia Municipal')
        ->set('category', 'Comunidad')
        ->assertSee('No se encontraron servicios')
        ->set('search', '')
        ->assertSee('Patrimonio y Cultura')
        ->call('selectService', 8)
        ->assertSet('selectedServiceId', 8)
        ->assertSee('Mantente informado sobre jornadas municipales');
});

it('shows more news dynamically', function () {
    Livewire::test(NewsSection::class)
        ->assertSee('Municipio realizará jornada')
        ->assertDontSee('Programa comunitario impulsa')
        ->call('showMore')
        ->assertSee('Programa comunitario impulsa')
        ->assertSee('Todas las noticias están visibles');
});

it('validates the contact form in real time and submits simulated messages', function () {
    Livewire::test(ContactForm::class)
        ->assertSet('canSubmit', false)
        ->set('name', 'Jo')
        ->assertHasErrors(['name' => 'min'])
        ->set('name', 'Jorge Troncoso')
        ->set('email', 'jorge@example.test')
        ->set('subject', 'Consulta municipal')
        ->set('requestType', 'Consulta general')
        ->set('message', 'Necesito orientación sobre un servicio municipal.')
        ->set('consent', true)
        ->assertSet('canSubmit', true)
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSee('Solicitud registrada correctamente')
        ->assertSet('name', '')
        ->assertSet('canSubmit', false);
});
