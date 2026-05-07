@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-full px-5 py-3 text-sm font-bold transition duration-200 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#38A9D6] focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50';
    $variants = [
        'primary' => 'bg-[#0077A8] text-white shadow-lg shadow-sky-900/10 hover:bg-[#123B63]',
        'secondary' => 'border border-white/70 bg-white/15 text-white backdrop-blur hover:bg-white/25',
        'outline' => 'border border-[#0077A8] bg-white text-[#123B63] hover:bg-[#E8F6FB]',
        'success' => 'bg-[#3A8F5A] text-white shadow-lg shadow-green-900/10 hover:bg-[#2f754a]',
    ];
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $base.' '.$variants[$variant]]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $base.' '.$variants[$variant]]) }}>
        {{ $slot }}
    </button>
@endif
