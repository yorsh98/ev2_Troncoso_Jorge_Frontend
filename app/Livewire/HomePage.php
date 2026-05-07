<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.public')]
#[Title('Municipalidad de Cholchol')]
class HomePage extends Component
{
    public bool $showAllMunicipalContacts = false;

    public function toggleMunicipalContacts(): void
    {
        $this->showAllMunicipalContacts = ! $this->showAllMunicipalContacts;
    }

    #[Computed]
    public function municipalContacts(): array
    {
        return [
            ['number' => 1, 'area' => 'INFORMACIONES', 'phone' => '452 734200'],
            ['number' => 2, 'area' => 'OMIL', 'phone' => '452 734236'],
            ['number' => 3, 'area' => 'SUBSIDIOS Y PENSIONES 1', 'phone' => '452 734230'],
            ['number' => 4, 'area' => 'SUBSIDIOS Y PENSIONES 2', 'phone' => '452 734229'],
            ['number' => 5, 'area' => 'PROGRAMA MUJER TRABAJADORA Y JEFAS DE HOGAR', 'phone' => '452 734224'],
            ['number' => 6, 'area' => 'HIDRICO', 'phone' => '452 734246'],
            ['number' => 7, 'area' => 'DAF', 'phone' => '452 734238'],
            ['number' => 8, 'area' => 'RENTAS Y PATENTES DAF', 'phone' => '452 734249'],
            ['number' => 9, 'area' => 'RRHH 1', 'phone' => '452 734220'],
            ['number' => 10, 'area' => 'RRHH 2', 'phone' => '452 734216'],
            ['number' => 11, 'area' => 'DIRECCIÓN DE OBRAS MUNICIPAL', 'phone' => '452 734213'],
            ['number' => 12, 'area' => 'OPERACIONES', 'phone' => '452 734202'],
            ['number' => 13, 'area' => 'PROGRAMAS EXTRA PRESUPUESTARIOS', 'phone' => '452 734260'],
            ['number' => 14, 'area' => 'CAJA', 'phone' => '452 734233'],
            ['number' => 15, 'area' => 'ENCARGADO VIVIENDA', 'phone' => '452 734211'],
            ['number' => 16, 'area' => 'AYUDA SOCIAL', 'phone' => '452 734215'],
            ['number' => 17, 'area' => 'DIRECTOR DE CONTROL', 'phone' => '452 734237'],
            ['number' => 18, 'area' => 'SECRETARIA DIDECO', 'phone' => '452 734243'],
            ['number' => 19, 'area' => 'ADMINISTRACIÓN', 'phone' => '452 734241'],
            ['number' => 20, 'area' => 'SECRETARIA ADMINISTRACIÓN', 'phone' => '452 734247'],
            ['number' => 21, 'area' => 'ASESOR JURÍDICO', 'phone' => '452 734259'],
            ['number' => 22, 'area' => 'UNIDAD GRD', 'phone' => '452 734264'],
            ['number' => 23, 'area' => 'TRANSITO 1', 'phone' => '452 734217'],
            ['number' => 24, 'area' => 'TRANSITO 2', 'phone' => '452 734250'],
            ['number' => 25, 'area' => 'TRANSPARENCIA', 'phone' => '452 734254'],
            ['number' => 26, 'area' => 'SECRETARIA MUNICIPAL', 'phone' => '452 734210'],
            ['number' => 27, 'area' => 'SEC. SECRETARIA MUNICIPAL', 'phone' => '452 734225'],
            ['number' => 28, 'area' => 'SEC. ADQUISICIONES', 'phone' => '452 734209'],
            ['number' => 29, 'area' => 'TESORERIA', 'phone' => '452 734258'],
            ['number' => 30, 'area' => 'PROGRAMA FAMILIAS 1', 'phone' => '452 734218'],
            ['number' => 31, 'area' => 'PROGRAMA FAMILIAS 2', 'phone' => '452 734235'],
            ['number' => 32, 'area' => 'SECRETARIA DEFICIT HIDRICO', 'phone' => '452 734227'],
            ['number' => 33, 'area' => 'REGISTRO SOCIAL DE HOGARES', 'phone' => '452 734212'],
            ['number' => 34, 'area' => 'MEDIO AMBIENTE', 'phone' => '452 734208'],
            ['number' => 35, 'area' => 'SECRETARIA HIDRICO', 'phone' => '452 734227'],
            ['number' => 36, 'area' => 'ORGANIZACIONES', 'phone' => '452 734252'],
            ['number' => 37, 'area' => 'SECRETARIA DIRECCIÓN DE OBRAS', 'phone' => '452 734240'],
            ['number' => 38, 'area' => 'DISCAPACIDAD', 'phone' => '452 734248'],
            ['number' => 39, 'area' => 'MARIA ARMIJO', 'phone' => '452 734234'],
        ];
    }

    #[Computed]
    public function visibleMunicipalContacts(): array
    {
        if ($this->showAllMunicipalContacts) {
            return $this->municipalContacts;
        }

        return array_slice($this->municipalContacts, 0, 5);
    }

    public function render(): mixed
    {
        return view('livewire.home-page');
    }
}
