<?php

namespace App\Contracts;

interface ContactMessageInterface
{
    /**
     * @param  array{name: string, email: string, subject: string, request_type: string, message: string, consent: bool}  $payload
     */
    public function submit(array $payload): string;
}
