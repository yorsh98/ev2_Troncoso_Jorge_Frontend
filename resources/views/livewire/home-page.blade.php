<div>
    <livewire:navigation-menu />

    <main id="contenido" tabindex="-1">
        <x-municipal.hero />
        <livewire:service-directory />

        <section class="bg-white py-20" aria-labelledby="institucional-title">
            <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-[0.85fr_1.15fr] lg:px-8">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.24em] text-[#0077A8]">Información institucional</p>
                    <h2 id="institucional-title" class="mt-3 text-3xl font-black tracking-tight text-[#123B63] sm:text-4xl">Una plataforma pensada para vecinos y vecinas</h2>
                </div>
                <div class="grid gap-5 sm:grid-cols-3">
                    <article class="rounded-3xl bg-[#F4F7FA] p-6">
                        <h3 class="font-black text-[#123B63]">Accesible</h3>
                        <p class="mt-3 leading-7 text-slate-600">Estructura semántica, foco visible, formularios etiquetados y mensajes de estado comprensibles.</p>
                    </article>
                    <article class="rounded-3xl bg-[#E8F6FB] p-6">
                        <h3 class="font-black text-[#123B63]">Responsiva</h3>
                        <p class="mt-3 leading-7 text-slate-600">Diseñada mobile first para una lectura clara en teléfonos, tablets y computadores.</p>
                    </article>
                    <article class="rounded-3xl bg-green-50 p-6">
                        <h3 class="font-black text-[#123B63]">Interactiva</h3>
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
