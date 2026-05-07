<?php

namespace App\Services;

use App\Contracts\ServiceCatalogInterface;
use App\DTO\MunicipalServiceData;
use Illuminate\Support\Collection;

final class MunicipalServiceCatalog implements ServiceCatalogInterface
{
    public function all(): Collection
    {
        return collect([
            new MunicipalServiceData(1, 'Direcciones Municipales', 'Institucional', 'Encuentra unidades, horarios y orientación para trámites internos.', 'Accede a información organizada sobre las direcciones municipales, sus funciones principales y canales de atención para resolver consultas de forma clara.', 'Ver direcciones', 'Gestión'),
            new MunicipalServiceData(2, 'Juzgado de Policía Local', 'Atención ciudadana', 'Información para causas, citaciones y consultas del juzgado local.', 'Consulta orientaciones generales del Juzgado de Policía Local, incluyendo materias frecuentes, requisitos y vías de contacto municipal.', 'Revisar orientación', 'Justicia local'),
            new MunicipalServiceData(3, 'Ordenanzas y Reglamentos', 'Institucional', 'Normativas comunales disponibles para vecinos y organizaciones.', 'Revisa ordenanzas, reglamentos y documentos normativos que regulan la vida comunal y promueven una convivencia informada.', 'Consultar documentos', 'Normativa'),
            new MunicipalServiceData(4, 'Transparencia Municipal', 'Transparencia', 'Acceso a información pública y antecedentes de gestión municipal.', 'Encuentra accesos a transparencia activa, solicitudes de información y antecedentes relevantes para fortalecer la confianza pública.', 'Ir a transparencia', 'Gobierno abierto'),
            new MunicipalServiceData(5, 'Patrimonio y Cultura', 'Comunidad', 'Actividades, espacios y patrimonio territorial de Cholchol.', 'Conoce iniciativas culturales, patrimonio local y actividades comunitarias que ponen en valor la identidad territorial de Cholchol.', 'Explorar cultura', 'Territorio'),
            new MunicipalServiceData(6, 'Atención Ciudadana', 'Atención ciudadana', 'Canal de ingreso para solicitudes, reclamos y orientación municipal.', 'Solicita apoyo, orientación o derivación municipal mediante canales de atención pensados para responder de manera cercana y oportuna.', 'Solicitar atención', 'Vecinos'),
            new MunicipalServiceData(7, 'Emergencias Comunales', 'Emergencias', 'Información de apoyo ante contingencias y situaciones de riesgo.', 'Revisa canales de coordinación municipal, recomendaciones preventivas y orientación general frente a emergencias comunales.', 'Ver apoyo', 'Urgente'),
            new MunicipalServiceData(8, 'Noticias Municipales', 'Comunidad', 'Actualidad comunal, operativos, programas y actividades públicas.', 'Mantente informado sobre jornadas municipales, programas sociales, mejoramientos urbanos y actividades relevantes para la comunidad.', 'Leer noticias', 'Actualidad'),
        ]);
    }

    public function categories(): array
    {
        return ['Atención ciudadana', 'Institucional', 'Comunidad', 'Transparencia', 'Emergencias'];
    }
}
