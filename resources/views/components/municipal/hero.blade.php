<section id="inicio" class="relative isolate overflow-hidden bg-[#033833] text-white">
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top_left,#F58220_0,transparent_26%),radial-gradient(circle_at_85%_20%,#E0F1F0_0,transparent_24%),linear-gradient(135deg,#033833_0%,#215BAD_58%,#033833_100%)]"></div>
    <div class="absolute inset-x-0 bottom-0 -z-10 h-24 bg-gradient-to-t from-[#F7FAFC] to-transparent"></div>

    <div class="mx-auto grid max-w-7xl gap-10 px-4 py-20 sm:px-6 lg:grid-cols-[1.05fr_0.95fr] lg:px-8 lg:py-28">
        <div class="flex flex-col justify-center">
            <p class="text-sm font-bold uppercase tracking-[0.28em] text-[#E0F1F0]">Chol Chol Avanza</p>
            <h1 class="mt-5 text-4xl font-black tracking-tight sm:text-6xl">Municipalidad de Cholchol</h1>
            <p class="mt-5 text-2xl font-bold text-[#E0F1F0]">Un municipio cercano, moderno y al servicio de la comunidad.</p>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-white/90">
                Accede rápidamente a servicios, noticias, contactos e información municipal desde una plataforma clara, accesible y adaptada a todos nuestros vecinos.
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
                        <p class="font-black text-[#033833]">Redes y canales oficiales</p>
                        <p class="mt-2 leading-7 text-slate-600">Síguenos para informarte sobre noticias, actividades, operativos y avisos relevantes de la Municipalidad de Cholchol.</p>
                        <div class="mt-4 grid gap-3 sm:grid-cols-2">
                            <a
                                href="https://www.facebook.com/p/Municipalidad-de-Cholchol-100065025870874/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="grid grid-cols-3 items-center rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm font-bold text-[#033833] shadow-sm transition hover:border-[#215BAD] hover:bg-[#E0F1F0]/50 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F58220]"
                                aria-label="Facebook oficial de la Municipalidad de Cholchol"
                            >
                                <span class="col-span-1 flex items-center justify-center">
                                    <span class="flex size-8 items-center justify-center rounded-lg bg-[#1877F2]/15">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" class="size-5 fill-[#1877F2]">
                                        <path d="M13.5 8.5V6.9c0-.7.4-.9 1-.9h1.4V3.5h-1.9c-2.2 0-3.5 1.3-3.5 3.4v1.6H8.8v2.7h1.7v8.3h3V11.2h2.1l.3-2.7h-2.4Z" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="col-span-2 min-w-0 text-left leading-tight [overflow-wrap:anywhere]">Facebook · Municipalidad de Cholchol</span>
                            </a>
                            <a
                                href="https://www.youtube.com/@MunicipalidaddeCholcholOficial"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="grid grid-cols-3 items-center rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm font-bold text-[#033833] shadow-sm transition hover:border-[#FF0000] hover:bg-[#E0F1F0]/50 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F58220]"
                                aria-label="Canal de YouTube Municipalidad de Cholchol"
                            >
                                <span class="col-span-1 flex items-center justify-center">
                                    <span class="flex size-8 items-center justify-center rounded-lg bg-[#FF0000]/15">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" class="size-5 fill-[#FF0000]">
                                            <path d="M21 8.4a2.9 2.9 0 0 0-2-2c-1.8-.5-7-.5-7-.5s-5.2 0-7 .5a2.9 2.9 0 0 0-2 2A30.4 30.4 0 0 0 2.5 12c0 1.2.1 2.4.5 3.6a2.9 2.9 0 0 0 2 2c1.8.5 7 .5 7 .5s5.2 0 7-.5a2.9 2.9 0 0 0 2-2c.3-1.2.5-2.4.5-3.6 0-1.2-.2-2.4-.5-3.6ZM10.5 15V9l5 3-5 3Z" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="col-span-2 min-w-0 text-left leading-tight [overflow-wrap:anywhere]">YouTube · Municipalidad de Cholchol</span>
                            </a>
                            <a
                                href="https://www.instagram.com/municholchol_oficial/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="grid grid-cols-3 items-center rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm font-bold text-[#033833] shadow-sm transition hover:border-[#E4405F] hover:bg-[#E0F1F0]/50 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F58220]"
                                aria-label="Instagram oficial municholchol_oficial"
                            >
                                <span class="col-span-1 flex items-center justify-center">
                                    <span class="flex size-8 items-center justify-center rounded-lg bg-[#E4405F]/15">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" class="size-5 fill-[#E4405F]">
                                            <path d="M7.8 3.5h8.4c2.4 0 4.3 1.9 4.3 4.3v8.4c0 2.4-1.9 4.3-4.3 4.3H7.8a4.3 4.3 0 0 1-4.3-4.3V7.8c0-2.4 1.9-4.3 4.3-4.3Zm0 1.8c-1.4 0-2.5 1.1-2.5 2.5v8.4c0 1.4 1.1 2.5 2.5 2.5h8.4c1.4 0 2.5-1.1 2.5-2.5V7.8c0-1.4-1.1-2.5-2.5-2.5H7.8Zm9.1 1.4a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm-4.9 1a4.3 4.3 0 1 1 0 8.6 4.3 4.3 0 0 1 0-8.6Zm0 1.8a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="col-span-2 min-w-0 text-left leading-tight [overflow-wrap:anywhere]">Instagram </span>
                            </a>
                            <a
                                href="https://municholchol.cl/"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="grid grid-cols-3 items-center rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm font-bold text-[#033833] shadow-sm transition hover:border-[#00A88F] hover:bg-[#E0F1F0]/50 focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F58220]"
                                aria-label="Sitio web oficial de la Municipalidad de Cholchol"
                            >
                                <span class="col-span-1 flex items-center justify-center">
                                    <span class="flex size-8 items-center justify-center rounded-lg bg-[#00A88F]/15">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" class="size-5 stroke-[#00A88F]" fill="none" stroke-width="2">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="col-span-2 min-w-0 text-left leading-tight [overflow-wrap:anywhere]">Pagina Web</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
