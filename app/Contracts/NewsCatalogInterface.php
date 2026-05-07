<?php

namespace App\Contracts;

use App\DTO\MunicipalNewsData;
use Illuminate\Support\Collection;

interface NewsCatalogInterface
{
    /**
     * @return Collection<int, MunicipalNewsData>
     */
    public function all(): Collection;
}
