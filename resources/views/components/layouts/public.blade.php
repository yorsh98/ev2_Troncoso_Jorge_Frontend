<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head')
        <meta name="description" content="Maqueta académica de rediseño conceptual de la Home de la Municipalidad de Cholchol.">
    </head>
    <body class="min-h-screen bg-[#F4F7FA] font-sans text-[#1F2937] antialiased selection:bg-[#38A9D6] selection:text-white">
        <a href="#contenido" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-full focus:bg-[#123B63] focus:px-5 focus:py-3 focus:text-sm focus:font-bold focus:text-white focus:outline-none focus:ring-4 focus:ring-[#38A9D6]">
            Saltar al contenido principal
        </a>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
