<section id="noticias" class="bg-[#F7FAFC] py-20" aria-labelledby="news-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <x-ui.section-title eyebrow="Noticias municipales" title="Actualidad comunal y participación" description="Infórmate sobre actividades, programas y novedades relevantes para la comunidad de Cholchol." id="news-title" />

        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3" aria-live="polite">
            @foreach ($this->displayedNews as $newsItem)
                <x-ui.news-card wire:key="news-card-{{ $newsItem['id'] }}" :news="$newsItem" />
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <x-ui.button wire:click="showMore" variant="primary" :disabled="! $this->hasMoreNews" aria-label="{{ $this->hasMoreNews ? 'Ver más noticias municipales' : 'Todas las noticias están visibles' }}">
                {{ $this->hasMoreNews ? 'Ver más noticias' : 'Todas las noticias están visibles' }}
            </x-ui.button>
        </div>
    </div>
</section>
