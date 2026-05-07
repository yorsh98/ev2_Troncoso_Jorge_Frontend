<header class="sticky top-0 z-40 border-b border-white/70 bg-white/90 shadow-sm backdrop-blur" aria-label="Cabecera institucional">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
        <a href="#inicio" wire:click="closeMenu" class="flex items-center gap-3 rounded-full focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#38A9D6] focus-visible:ring-offset-2" aria-label="Ir al inicio de la Municipalidad de Cholchol">
            <span class="flex size-11 items-center justify-center rounded-2xl bg-[#0077A8] text-lg font-black text-white">CH</span>
            <span class="leading-tight">
                <span class="block text-base font-black text-[#123B63]">Municipalidad</span>
                <span class="block text-sm font-bold text-[#0077A8]">de Cholchol</span>
            </span>
        </a>

        <nav class="hidden items-center gap-7 lg:flex" aria-label="Navegación principal">
            @foreach ($items as $item)
                <a wire:key="desktop-nav-{{ $item['label'] }}" href="{{ $item['href'] }}" class="rounded-full text-sm font-bold text-slate-700 transition hover:text-[#0077A8] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#38A9D6] focus-visible:ring-offset-2">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <x-ui.button href="#servicios" variant="primary">Trámites municipales</x-ui.button>
        </div>

        <button
            type="button"
            wire:click="toggleMenu"
            class="inline-flex size-12 items-center justify-center rounded-2xl border border-slate-200 bg-white text-[#123B63] shadow-sm transition hover:bg-[#E8F6FB] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#38A9D6] focus-visible:ring-offset-2 lg:hidden"
            aria-label="{{ $isOpen ? 'Cerrar menú móvil' : 'Abrir menú móvil' }}"
            aria-controls="mobile-menu"
            aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
        >
            <span aria-hidden="true" class="text-2xl font-black">{{ $isOpen ? '×' : '☰' }}</span>
        </button>
    </div>

    @if ($isOpen)
        <nav id="mobile-menu" class="border-t border-slate-200 bg-white px-4 py-4 lg:hidden" aria-label="Navegación móvil">
            <div class="mx-auto grid max-w-7xl gap-2">
                @foreach ($items as $item)
                    <a wire:key="mobile-nav-{{ $item['label'] }}" wire:click="closeMenu" href="{{ $item['href'] }}" class="rounded-2xl px-4 py-3 font-bold text-slate-700 transition hover:bg-[#E8F6FB] hover:text-[#0077A8] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#38A9D6]">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <x-ui.button href="#servicios" wire:click="closeMenu" variant="primary" class="mt-2 w-full">Trámites municipales</x-ui.button>
            </div>
        </nav>
    @endif
</header>
