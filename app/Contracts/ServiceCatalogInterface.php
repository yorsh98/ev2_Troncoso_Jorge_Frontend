<?php

namespace App\Contracts;

use App\DTO\MunicipalServiceData;
use Illuminate\Support\Collection;

interface ServiceCatalogInterface
{
    /**
     * @return Collection<int, MunicipalServiceData>
     */
    public function all(): Collection;

    /**
     * @return array<int, string>
     */
    public function categories(): array;
}
