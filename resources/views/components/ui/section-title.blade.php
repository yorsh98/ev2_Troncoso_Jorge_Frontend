@props([
    'eyebrow',
    'title',
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'mx-auto max-w-3xl text-center']) }}>
    <p class="text-sm font-bold uppercase tracking-[0.24em] text-[#0077A8]">{{ $eyebrow }}</p>
    <h2 class="mt-3 text-3xl font-black tracking-tight text-[#123B63] sm:text-4xl">{{ $title }}</h2>

    @if ($description)
        <p class="mt-4 text-base leading-7 text-slate-600 sm:text-lg">{{ $description }}</p>
    @endif
</div>
