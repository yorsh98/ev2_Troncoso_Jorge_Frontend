<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head')
        <meta name="description" content="Maqueta académica de rediseño conceptual de la Home de la Municipalidad de Cholchol.">
    </head>
    <body class="min-h-screen bg-[#F7FAFC] font-sans text-[#1F2937] antialiased selection:bg-[#F58220] selection:text-white">
        <a href="#contenido" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-full focus:bg-[#033833] focus:px-5 focus:py-3 focus:text-sm focus:font-bold focus:text-white focus:outline-none focus:ring-4 focus:ring-[#F58220]">
            Saltar al contenido principal
        </a>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
