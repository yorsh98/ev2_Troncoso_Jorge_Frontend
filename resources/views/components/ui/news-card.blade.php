@props(['news'])

<article {{ $attributes->merge(['class' => 'flex h-full flex-col rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition duration-200 hover:-translate-y-1 hover:border-[#F58220] hover:shadow-xl hover:shadow-blue-900/10']) }}>
    <div class="flex flex-wrap items-center gap-3 text-sm">
        <time datetime="{{ $news['date'] }}" class="font-bold text-[#215BAD]">{{ $news['date'] }}</time>
        <span class="rounded-full bg-[#E0F1F0] px-3 py-1 text-xs font-bold uppercase tracking-wide text-[#033833]">{{ $news['category'] }}</span>
    </div>
    <h3 class="mt-4 text-xl font-black leading-tight text-[#033833]">{{ $news['title'] }}</h3>
    <p class="mt-3 grow text-base leading-7 text-slate-600">{{ $news['excerpt'] }}</p>
</article>
