@props([
    'service',
    'selected' => false,
])

<button
    type="button"
    aria-pressed="{{ $selected ? 'true' : 'false' }}"
    {{ $attributes->class([
        'group h-full rounded-3xl border p-5 text-left shadow-sm transition duration-200 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#38A9D6] focus-visible:ring-offset-2',
        'border-[#0077A8] bg-[#E8F6FB] shadow-sky-900/10' => $selected,
        'border-slate-200 bg-white hover:-translate-y-1 hover:border-[#38A9D6] hover:shadow-xl hover:shadow-sky-900/10' => ! $selected,
    ]) }}
>
    <span class="inline-flex rounded-full bg-[#0077A8]/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-[#0077A8]">
        {{ $service['tag'] }}
    </span>
    <h3 class="mt-4 text-xl font-black text-[#123B63]">{{ $service['title'] }}</h3>
    <p class="mt-2 text-sm font-semibold text-[#3A8F5A]">{{ $service['category'] }}</p>
    <p class="mt-3 text-base leading-7 text-slate-600">{{ $service['summary'] }}</p>
    <span class="mt-5 inline-flex items-center text-sm font-bold text-[#0077A8] group-hover:text-[#123B63]">
        {{ $service['actionText'] }}
        <span aria-hidden="true" class="ml-2">→</span>
    </span>
</button>
