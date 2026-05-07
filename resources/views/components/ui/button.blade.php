@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-full px-5 py-3 text-sm font-bold transition duration-200 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F58220] focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50';
    $variants = [
        'primary' => 'bg-[#215BAD] text-white shadow-lg shadow-blue-900/10 hover:bg-[#033833]',
        'secondary' => 'border border-white/70 bg-white/15 text-white backdrop-blur hover:bg-white/25',
        'outline' => 'border border-[#215BAD] bg-white text-[#033833] hover:bg-[#E0F1F0]',
        'success' => 'bg-[#033833] text-white shadow-lg shadow-green-950/10 hover:bg-[#022824]',
        'accent' => 'bg-[#F58220] text-white shadow-lg shadow-orange-900/10 hover:bg-[#c96718]',
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
