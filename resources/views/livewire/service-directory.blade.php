<section id="servicios" class="bg-[#F4F7FA] py-20" aria-labelledby="services-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <x-ui.section-title eyebrow="Servicios municipales" title="Accesos rápidos para la comunidad" description="Busca, filtra y selecciona servicios para conocer información relevante sin recargar la página." id="services-title" />

        <div class="mt-10 grid gap-4 rounded-[2rem] border border-slate-200 bg-white p-4 shadow-sm lg:grid-cols-[1fr_18rem] lg:p-6">
            <div>
                <label for="service-search" class="block text-sm font-bold text-[#123B63]">Buscar servicios</label>
                <input id="service-search" type="search" wire:model.live.debounce.250ms="search" class="mt-2 w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-base text-slate-900 transition placeholder:text-slate-400 focus:border-[#0077A8] focus:outline-none focus:ring-4 focus:ring-[#38A9D6]/30" placeholder="Ejemplo: transparencia, cultura, emergencias" autocomplete="off" aria-describedby="service-count">
            </div>

            <div>
                <label for="service-category" class="block text-sm font-bold text-[#123B63]">Categoría</label>
                <select id="service-category" wire:model.live="category" class="mt-2 w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-base text-slate-900 transition focus:border-[#0077A8] focus:outline-none focus:ring-4 focus:ring-[#38A9D6]/30" aria-describedby="service-count">
                    @foreach ($categories as $serviceCategory)
                        <option wire:key="category-{{ $serviceCategory }}" value="{{ $serviceCategory }}">{{ $serviceCategory }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <p id="service-count" class="mt-5 text-center text-base font-bold text-[#123B63]" aria-live="polite">
            {{ count($this->filteredServices) }} servicios encontrados
        </p>

        <div class="mt-8 grid gap-8 lg:grid-cols-[1fr_24rem]">
            <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-3" aria-label="Listado filtrado de servicios municipales">
                @forelse ($this->filteredServices as $service)
                    <x-ui.service-card wire:key="service-card-{{ $service['id'] }}" wire:click="selectService({{ $service['id'] }})" :service="$service" :selected="$selectedServiceId === $service['id']" />
                @empty
                    <div class="rounded-3xl border border-dashed border-slate-300 bg-white p-8 text-center text-slate-600 sm:col-span-2 xl:col-span-3" role="status">
                        No se encontraron servicios con los criterios seleccionados.
                    </div>
                @endforelse
            </div>

            <aside class="h-fit rounded-[2rem] border border-[#0077A8]/20 bg-white p-6 shadow-xl shadow-sky-900/10" aria-labelledby="service-detail-title" aria-live="polite">
                @if ($this->selectedService)
                    <span class="inline-flex rounded-full bg-[#3A8F5A]/10 px-3 py-1 text-xs font-bold uppercase tracking-wide text-[#2f754a]">{{ $this->selectedService['category'] }}</span>
                    <h3 id="service-detail-title" class="mt-4 text-2xl font-black text-[#123B63]">{{ $this->selectedService['title'] }}</h3>
                    <p class="mt-4 leading-7 text-slate-600">{{ $this->selectedService['description'] }}</p>
                    <x-ui.button href="#contacto" variant="outline" class="mt-6 w-full">{{ $this->selectedService['actionText'] }}</x-ui.button>
                @else
                    <h3 id="service-detail-title" class="text-2xl font-black text-[#123B63]">Selecciona un servicio</h3>
                    <p class="mt-4 leading-7 text-slate-600">El detalle aparecerá aquí cuando exista un resultado disponible.</p>
                @endif
            </aside>
        </div>
    </div>
</section>
