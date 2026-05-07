@props([
    'service',
    'selected' => false,
])

<button
    type="button"
    aria-pressed="{{ $selected ? 'true' : 'false' }}"
    {{ $attributes->class([
        'group h-full rounded-3xl border p-5 text-left shadow-sm transition duration-200 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F58220] focus-visible:ring-offset-2',
        'border-[#215BAD] bg-[#E0F1F0] shadow-blue-900/10' => $selected,
        'border-slate-200 bg-white hover:-translate-y-1 hover:border-[#F58220] hover:shadow-xl hover:shadow-blue-900/10' => ! $selected,
    ]) }}
>
    <span class="inline-flex rounded-full bg-[#F58220]/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-[#9a4f13]">
        {{ $service['tag'] }}
    </span>
    <h3 class="mt-4 text-xl font-black text-[#033833]">{{ $service['title'] }}</h3>
    <p class="mt-2 text-sm font-semibold text-[#215BAD]">{{ $service['category'] }}</p>
    <p class="mt-3 text-base leading-7 text-slate-600">{{ $service['summary'] }}</p>
    <span class="mt-5 inline-flex items-center text-sm font-bold text-[#215BAD] group-hover:text-[#033833]">
        {{ $service['actionText'] }}
        <span aria-hidden="true" class="ml-2">→</span>
    </span>
</button>
