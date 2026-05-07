<section id="inicio" class="relative isolate overflow-hidden bg-[#033833] text-white">
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top_left,#F58220_0,transparent_26%),radial-gradient(circle_at_85%_20%,#E0F1F0_0,transparent_24%),linear-gradient(135deg,#033833_0%,#215BAD_58%,#033833_100%)]"></div>
    <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-[#F7FAFC] to-transparent"></div>

    <div class="mx-auto grid max-w-7xl gap-10 px-4 py-20 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:px-8 lg:py-28">
        <div class="flex flex-col justify-center">
            <p class="text-sm font-bold uppercase tracking-[0.28em] text-[#E0F1F0]">Chol Chol Avanza</p>
            <h1 class="mt-5 text-4xl font-black tracking-tight sm:text-6xl">Municipalidad de Cholchol</h1>
            <p class="mt-5 text-2xl font-bold text-[#E0F1F0]">Un municipio cercano, moderno y al servicio de la comunidad.</p>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-white/90">
                Accede rápidamente a servicios, noticias, contactos e información municipal desde una plataforma clara, accesible y adaptada a todos los dispositivos.
            </p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <x-ui.button href="#servicios" variant="accent">Ver servicios</x-ui.button>
                <x-ui.button href="#contacto" variant="secondary">Contactar municipio</x-ui.button>
            </div>
        </div>

        <div class="rounded-[2rem] border border-white/25 bg-white/12 p-5 shadow-2xl shadow-green-950/30 backdrop-blur">
            <div class="rounded-[1.5rem] bg-white p-6 text-[#1F2937]">
                <div class="flex items-center justify-between gap-4">
                    <p class="text-sm font-bold uppercase tracking-[0.22em] text-[#215BAD]">Servicios destacados</p>
                    <span class="flex size-14 items-center justify-center rounded-2xl bg-[#033833] p-2">
                        <img src="{{ asset('img/loggo-chico-mini-letrasblancas-tvKgkW5VNXE40IuRBlPVbw.png') }}" alt="Isotipo Municipalidad de Cholchol" class="size-full object-contain">
                    </span>
                </div>
                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-2xl bg-[#E0F1F0] p-5">
                        <p class="text-3xl font-black text-[#215BAD]">8</p>
                        <p class="mt-1 font-bold text-[#033833]">Servicios municipales</p>
                    </div>
                    <div class="rounded-2xl bg-orange-50 p-5">
                        <p class="text-3xl font-black text-[#F58220]">6</p>
                        <p class="mt-1 font-bold text-[#033833]">Noticias comunales</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 p-5 sm:col-span-2">
                        <p class="font-black text-[#033833]">Plataforma accesible</p>
                        <p class="mt-2 leading-7 text-slate-600">Navegación por teclado, contraste adecuado, validación en tiempo real y experiencia mobile first.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
