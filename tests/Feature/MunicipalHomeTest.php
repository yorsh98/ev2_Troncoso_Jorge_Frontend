<?php

use App\Livewire\ContactForm;
use App\Livewire\HomePage;
use App\Livewire\NavigationMenu;
use App\Livewire\NewsSection;
use App\Livewire\ServiceDirectory;
use Livewire\Livewire;

it('renders the municipal home page', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('Municipalidad de Cholchol')
        ->assertSee('Contactos municipales')
        ->assertSee('OMIL')
        ->assertSee('452 734236')
        ->assertSee('Ver todos los contactos')
        ->assertSee('José Joaquín Pérez 449, Cholchol, Región de La Araucanía, Chile')
        ->assertSee('Mapa de ubicación de la Municipalidad de Cholchol')
        ->assertSee('LogoAzul-bg4CKnlIXMNGnnMByzWzKw-mHg3fO9z4xvfUq9iMzlCKA.png')
        ->assertSee('loggo-chico-mini-letrasblancas-tvKgkW5VNXE40IuRBlPVbw.png')
        ->assertSee('R3.jpg')
        ->assertSee('image_20e8bec9-wVNqCPEJRQowDDdvEXsb5A.png')
        ->assertSeeLivewire(NavigationMenu::class)
        ->assertSeeLivewire(ServiceDirectory::class)
        ->assertSeeLivewire(NewsSection::class)
        ->assertSeeLivewire(ContactForm::class);
});

it('expands and collapses municipal contact numbers', function () {
    Livewire::test(HomePage::class)
        ->assertSee('INFORMACIONES')
        ->assertSee('PROGRAMA MUJER TRABAJADORA Y JEFAS DE HOGAR')
        ->assertDontSee('REGISTRO SOCIAL DE HOGARES')
        ->assertSee('Mostrando 5 de 39 contactos municipales.')
        ->call('toggleMunicipalContacts')
        ->assertSet('showAllMunicipalContacts', true)
        ->assertSee('REGISTRO SOCIAL DE HOGARES')
        ->assertSee('MARIA ARMIJO')
        ->assertSee('Mostrando 39 de 39 contactos municipales.')
        ->call('toggleMunicipalContacts')
        ->assertSet('showAllMunicipalContacts', false)
        ->assertDontSee('REGISTRO SOCIAL DE HOGARES');
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
