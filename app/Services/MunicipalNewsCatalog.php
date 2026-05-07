<?php

namespace App\Services;

use App\Contracts\NewsCatalogInterface;
use App\DTO\MunicipalNewsData;
use Illuminate\Support\Collection;

final class MunicipalNewsCatalog implements NewsCatalogInterface
{
    public function all(): Collection
    {
        return collect([
            new MunicipalNewsData(1, 'Municipio realizará jornada de atención ciudadana en sectores rurales', 'Equipos municipales se desplegarán para orientar a vecinos en trámites, beneficios y solicitudes comunitarias.', '06 mayo 2026', 'Atención ciudadana'),
            new MunicipalNewsData(2, 'Avanza mejoramiento de espacios públicos en Cholchol urbano', 'La intervención considera áreas verdes, mobiliario y recorridos más seguros para peatones y familias.', '02 mayo 2026', 'Obras comunales'),
            new MunicipalNewsData(3, 'Actividades culturales fortalecen la identidad territorial', 'Talleres y encuentros comunitarios buscan relevar expresiones locales, memoria y participación vecinal.', '28 abril 2026', 'Cultura'),
            new MunicipalNewsData(4, 'Operativo municipal acerca servicios preventivos a la comunidad', 'La iniciativa coordinó orientación social, apoyo comunitario y derivaciones para familias de la comuna.', '22 abril 2026', 'Comunidad'),
            new MunicipalNewsData(5, 'Municipalidad refuerza canales de transparencia e información pública', 'Se promueve el acceso claro a documentos, solicitudes y antecedentes de gestión disponibles para la ciudadanía.', '18 abril 2026', 'Transparencia'),
            new MunicipalNewsData(6, 'Programa comunitario impulsa participación de organizaciones locales', 'Vecinos y dirigentes participaron en una jornada de trabajo para priorizar necesidades barriales.', '12 abril 2026', 'Participación'),
        ]);
    }
}
