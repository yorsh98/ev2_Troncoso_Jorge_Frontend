# Rediseño Home Municipalidad de Cholchol

## 1. Nombre del proyecto

Rediseño académico de la página Home de la Municipalidad de Cholchol.

## 2. Descripción

Proyecto académico de Desarrollo Frontend Unidad 2 que presenta una versión modernizada, responsiva, accesible e interactiva de una Home municipal. El contenido es una maqueta basada de forma conceptual en la presencia web de la Municipalidad de Cholchol y no corresponde a un sitio oficial.

## 3. Framework utilizado

- Laravel 13.
- Livewire 4.
- Tailwind CSS 4.
- Blade Components.
- PHP 8.4.
- Vite.

## 4. Instalación

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

## 5. Comandos para ejecutar

```bash
npm run dev
php artisan serve
```

Para generar assets de producción:

```bash
npm run build
```

La base de datos no es obligatoria para revisar la Home, porque servicios y noticias se cargan desde servicios PHP internos.

## 6. Componentes creados

- `App\Livewire\HomePage`: composición principal de la Home.
- `App\Livewire\NavigationMenu`: header institucional y menú responsive.
- `App\Livewire\ServiceDirectory`: búsqueda, filtro, contador y detalle de servicios.
- `App\Livewire\NewsSection`: listado de noticias y carga dinámica.
- `App\Livewire\ContactForm`: formulario con validación en tiempo real y envío simulado.
- `resources/views/components/ui/button.blade.php`: botón reutilizable.
- `resources/views/components/ui/section-title.blade.php`: encabezado de sección.
- `resources/views/components/ui/service-card.blade.php`: tarjeta seleccionable de servicio.
- `resources/views/components/ui/news-card.blade.php`: tarjeta de noticia.
- `resources/views/components/ui/input-error.blade.php`: mensaje accesible de error.
- `resources/views/components/municipal/hero.blade.php`: hero institucional.
- `resources/views/components/municipal/footer.blade.php`: footer institucional.

## 7. Eventos implementados

- Click en botón de menú móvil para abrir y cerrar navegación.
- Click en enlaces móviles para cerrar el menú.
- Click en tarjeta de servicio para cambiar el detalle seleccionado.
- Escritura en buscador de servicios con `wire:model.live`.
- Cambio de categoría mediante selector con `wire:model.live`.
- Click en “Ver más noticias” para ampliar el listado.
- Submit del formulario de contacto con validación y registro simulado.
- Estados hover y focus visibles con Tailwind CSS.

## 8. Validaciones implementadas

- Nombre requerido, mínimo 3 caracteres y máximo 80 caracteres.
- Correo requerido y con formato válido.
- Asunto requerido.
- Tipo de solicitud requerido.
- Mensaje requerido, mínimo 10 caracteres y máximo 500 caracteres.
- Consentimiento obligatorio.
- Validación en tiempo real mediante `updated()` y `validateOnly()`.
- Botón deshabilitado hasta que el formulario completo sea válido.

## 9. Modificaciones dinámicas del DOM

- La lista de servicios cambia según búsqueda.
- La lista de servicios cambia según categoría.
- El contador de servicios encontrados se actualiza dinámicamente.
- El panel de detalle cambia al seleccionar una tarjeta.
- Las noticias visibles aumentan al presionar “Ver más noticias”.
- El formulario muestra errores y éxito sin recargar la página.
- El botón de envío cambia texto, estado visual y atributo `disabled` según validez.

## 10. Principios SOLID aplicados

- SRP: cada componente Livewire tiene una responsabilidad clara y separada.
- OCP: servicios, noticias y categorías están centralizados en catálogos PHP extensibles.
- LSP: los componentes dependen de contratos reemplazables por otras implementaciones.
- ISP: se separaron contratos para servicios, noticias y contacto.
- DIP: los componentes dependen de interfaces y servicios registrados en el contenedor de Laravel, no de datos quemados en las vistas.

## 11. Consideraciones de accesibilidad

- Uso de `header`, `nav`, `main`, `section`, `article`, `aside` y `footer`.
- Enlace “Saltar al contenido principal”.
- Labels asociados a todos los campos del formulario.
- Mensajes de error con `role="alert"` y referencias `aria-describedby`.
- Mensajes dinámicos con `aria-live`.
- Botones con `aria-label`, `aria-expanded`, `aria-controls` y `aria-pressed` cuando corresponde.
- Contraste alto en textos y botones.
- Focus visible en enlaces, botones e inputs.
- No se usan placeholders como reemplazo de labels.

## 12. Capturas sugeridas para el informe

- Vista móvil con menú cerrado y abierto.
- Hero institucional en escritorio.
- Servicios filtrados por búsqueda.
- Servicios filtrados por categoría y detalle seleccionado.
- Noticias antes y después de presionar “Ver más noticias”.
- Formulario incompleto con botón deshabilitado.
- Formulario válido con botón habilitado.
- Mensaje de éxito posterior al envío simulado.

## 13. Nota académica

El contenido es ficticio y se utiliza únicamente para fines académicos. La propuesta toma como referencia conceptual una Home municipal, sin scraping, sin APIs externas y sin uso de información sensible.
