<div>
    <livewire:navigation-menu />

    <main id="contenido" tabindex="-1">
        <x-municipal.hero />
        <livewire:service-directory />

        <section class="bg-white py-20" aria-labelledby="contactos-municipales-title">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <p class="text-sm font-bold uppercase tracking-[0.24em] text-[#215BAD]">Contactos municipales</p>
                    <h2 id="contactos-municipales-title" class="mt-3 text-3xl font-black tracking-tight text-[#033833] sm:text-4xl">Anexos de atención por área</h2>
                    <p class="mt-4 text-base leading-7 text-slate-600 sm:text-lg">Consulta el teléfono directo de cada unidad municipal para orientar tu solicitud de forma más rápida.</p>
                </div>

                <div class="mt-10 overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-xl shadow-blue-900/10">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200 text-left text-sm">
                            <caption class="sr-only">Listado de áreas municipales y sus anexos telefónicos</caption>
                            <thead class="bg-[#033833] text-white">
                                <tr>
                                    <th scope="col" class="px-5 py-4 font-black">#</th>
                                    <th scope="col" class="px-5 py-4 font-black">Área</th>
                                    <th scope="col" class="px-5 py-4 font-black">Anexo</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 bg-white">
                                @foreach ($this->visibleMunicipalContacts as $contact)
                                    <tr class="transition hover:bg-[#E0F1F0]/50" wire:key="municipal-contact-{{ $contact['number'] }}">
                                        <td class="whitespace-nowrap px-5 py-4 font-bold text-[#215BAD]">{{ $contact['number'] }}</td>
                                        <td class="min-w-64 px-5 py-4 font-bold text-[#033833]">{{ $contact['area'] }}</td>
                                        <td class="whitespace-nowrap px-5 py-4">
                                            <a href="tel:+56{{ str_replace(' ', '', $contact['phone']) }}" class="rounded-full font-bold text-[#215BAD] hover:text-[#033833] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#F58220]">
                                                {{ $contact['phone'] }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <x-ui.button
                        type="button"
                        variant="{{ $showAllMunicipalContacts ? 'outline' : 'accent' }}"
                        wire:click="toggleMunicipalContacts"
                        aria-expanded="{{ $showAllMunicipalContacts ? 'true' : 'false' }}"
                        aria-controls="contactos-municipales-title"
                    >
                        {{ $showAllMunicipalContacts ? 'Ver menos contactos' : 'Ver todos los contactos' }}
                    </x-ui.button>
                    <p class="mt-3 text-sm font-semibold text-slate-600" aria-live="polite">
                        Mostrando {{ count($this->visibleMunicipalContacts) }} de {{ count($this->municipalContacts) }} contactos municipales.
                    </p>
                </div>
            </div>
        </section>

        <livewire:news-section />
        <livewire:contact-form />
    </main>

    <x-municipal.footer />
</div>
