<?php

namespace App\Services;

use App\Contracts\ContactMessageInterface;
use Illuminate\Support\Str;

final class ContactMessageService implements ContactMessageInterface
{
    public function submit(array $payload): string
    {
        return 'CHOL-'.now()->format('Ymd').'-'.Str::upper(Str::random(5));
    }
}
