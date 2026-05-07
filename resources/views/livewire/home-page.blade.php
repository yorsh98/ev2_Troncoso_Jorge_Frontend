<div>
    <livewire:navigation-menu />

    <main id="contenido" tabindex="-1">
        <x-municipal.hero />
        <livewire:service-directory />

        <section class="bg-white py-20" aria-labelledby="institucional-title">
            <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.24em] text-[#215BAD]">Información institucional</p>
                    <h2 id="institucional-title" class="mt-3 text-3xl font-black tracking-tight text-[#033833] sm:text-4xl">Una plataforma pensada para vecinos y vecinas</h2>
                </div>
                <div class="grid gap-5 sm:grid-cols-3">
                    <article class="rounded-3xl bg-[#F7FAFC] p-6">
                        <h3 class="font-black text-[#033833]">Accesible</h3>
                        <p class="mt-3 leading-7 text-slate-600">Estructura semántica, foco visible, formularios etiquetados y mensajes de estado comprensibles.</p>
                    </article>
                    <article class="rounded-3xl bg-[#E0F1F0] p-6">
                        <h3 class="font-black text-[#033833]">Responsiva</h3>
                        <p class="mt-3 leading-7 text-slate-600">Diseñada mobile first para una lectura clara en teléfonos, tablets y computadores.</p>
                    </article>
                    <article class="rounded-3xl bg-orange-50 p-6">
                        <h3 class="font-black text-[#033833]">Interactiva</h3>
                        <p class="mt-3 leading-7 text-slate-600">Livewire actualiza servicios, noticias, menú y formulario sin recargar la página.</p>
                    </article>
                </div>
            </div>
        </section>

        <livewire:news-section />
        <livewire:contact-form />
    </main>

    <x-municipal.footer />
</div>
