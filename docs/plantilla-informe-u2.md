# Informe Técnico - Evaluación U2 Desarrollo Frontend

> Plantilla formal para completar y entregar.  
> Reemplaza todos los campos entre corchetes `[...]`.

---

## 1) Portada

- **Institución:** Instituto Profesional San Sebastián  
- **Asignatura:** Desarrollo Frontend  
- **Unidad:** U2  
- **Nombre del proyecto:** `[Rediseño Home Municipalidad de Cholchol]`  
- **Estudiante:** `[Nombre completo]`  
- **Docente:** `[Nombre docente]`  
- **Sección:** `[Sección]`  
- **Fecha:** `[dd/mm/aaaa]`

---

## 2) Introducción

En este informe se documenta el desarrollo del proyecto `[nombre del proyecto]`, implementado con Laravel, Livewire y Tailwind CSS, con el objetivo de construir una interfaz web moderna, responsiva, accesible e interactiva, alineada con los criterios de evaluación de la rúbrica U2 de Desarrollo Frontend.

Se presenta evidencia técnica por criterio (CE1 a CE8), además de decisiones de diseño, estructura del framework, validaciones en tiempo real, eventos de interacción, modificaciones dinámicas del DOM y estándares de codificación aplicados.

---

## 3) Objetivo general

Desarrollar una página Home municipal con arquitectura frontend mantenible, aplicando interactividad, validación de formularios, actualización dinámica de contenido, diseño responsivo, accesibilidad web y buenas prácticas de desarrollo con framework.

### 3.1 Objetivos específicos

1. Implementar eventos de interfaz para responder a acciones del usuario.  
2. Construir un formulario de contacto con validación en tiempo real.  
3. Actualizar contenido del DOM dinámicamente sin recarga de página.  
4. Aplicar diseño visual coherente, legible y adaptativo.  
5. Mantener una estructura modular con componentes y capa de servicios.

---

## 4) Tecnologías utilizadas

- **Backend / Framework:** Laravel `[versión]`  
- **Interactividad:** Livewire `[versión]`  
- **Estilos:** Tailwind CSS `[versión]`  
- **Lenguaje:** PHP `[versión]`  
- **Plantillas:** Blade Components  
- **Build tool:** Vite

---

## 5) Estructura del proyecto (resumen)

Describe brevemente cómo se organizó el proyecto y por qué.

```text
app/
  Livewire/
  Services/
  Contracts/
  DTO/
resources/views/
  livewire/
  components/
routes/
tests/
```

**Justificación breve:** `[explica en 4-6 líneas por qué esta estructura mejora mantenibilidad y escalabilidad]`.

---

## 6) Desarrollo por criterio de evaluación

## CE1 - Eventos en la interfaz de usuario

### Evidencia implementada

Enumera al menos 6 eventos reales:

1. `[Evento 1: botón menú móvil abre/cierra]`  
2. `[Evento 2: click en tarjeta de servicio]`  
3. `[Evento 3: búsqueda en tiempo real]`  
4. `[Evento 4: filtro por categoría]`  
5. `[Evento 5: ver más noticias]`  
6. `[Evento 6: submit formulario contacto]`  
7. `[Evento opcional: expandir/contraer contactos]`

**Resultado técnico:** `[explica en 3-5 líneas la respuesta dinámica lograda y ausencia de errores visibles]`.

---

## CE2 - Formulario de contacto y validación en tiempo real

### Campos del formulario

- Nombre  
- Correo  
- Asunto  
- Tipo de solicitud  
- Mensaje  
- Consentimiento

### Validaciones aplicadas

- `[nombre required|min|max]`  
- `[email required|email]`  
- `[subject required]`  
- `[requestType required]`  
- `[message required|min|max]`  
- `[consent accepted]`

### Comportamiento del botón de envío

- Estado inicial deshabilitado (`disabled`).  
- Se habilita solo con formulario completamente válido.  
- Cambia texto y estilo según estado.  
- Muestra éxito en tiempo real tras envío simulado.

**Resultado técnico:** `[3-5 líneas]`.

---

## CE3 - Modificación dinámica del DOM

Registra al menos 5 modificaciones:

1. `[lista servicios cambia por búsqueda]`  
2. `[lista servicios cambia por categoría]`  
3. `[contador de resultados dinámico]`  
4. `[detalle de servicio cambia al seleccionar card]`  
5. `[noticias se expanden con botón]`  
6. `[errores y éxito del formulario en vivo]`

**Resultado técnico:** `[3-5 líneas]`.

---

## CE4 - Integración de framework + responsividad + accesibilidad

### Framework

- `[explica uso de componentes Livewire, Blade Components y estructura de rutas/vistas]`

### Responsividad

- `[mobile first]`  
- `[breakpoints usados]`  
- `[comportamiento del menú y grillas en móvil/tablet/escritorio]`

### Accesibilidad

- Uso de etiquetas semánticas (`header`, `nav`, `main`, `section`, `article`, `footer`).  
- Focus visible en controles interactivos.  
- Labels asociados a inputs.  
- `aria-label`, `aria-live`, `aria-expanded`, `aria-controls` donde corresponde.  
- Contraste y legibilidad.

**Resultado técnico:** `[3-5 líneas]`.

---

## CE5 - Principios de diseño de interfaz (coherencia)

- Sistema visual coherente en botones, cards, formularios y navegación.  
- Estados consistentes (`hover`, `focus`, `active`, `disabled`).  
- Navegación clara e intuitiva.

**Resultado técnico:** `[3-5 líneas]`.

---

## CE6 - Diseño visual y legibilidad

- Jerarquía tipográfica definida (`títulos`, `subtítulos`, `texto base`).  
- Paleta institucional aplicada consistentemente.  
- Espaciado y alineación que favorecen lectura.  
- Uso de recursos gráficos integrados sin sobrecargar la interfaz.

**Resultado técnico:** `[3-5 líneas]`.

---

## CE7 - Estructura del framework y patrones de diseño

### Patrones aplicados

- Component Pattern  
- Service Layer  
- Dependency Inversion  
- Presentational Components (Blade)

### Aplicación práctica

- `[menciona Contracts, Services, DTO y separación por responsabilidad]`

**Resultado técnico:** `[3-5 líneas]`.

---

## CE8 - Estándares de codificación y ciclo de vida de componentes

### Estándares

- Nombres claros y métodos pequeños.  
- Sin duplicaciones innecesarias.  
- Convenciones de framework respetadas.

### Ciclo de vida (Livewire)

- `mount()` para estado inicial.  
- `updated()/validateOnly()` para validación en tiempo real.  
- `#[Computed]` para propiedades derivadas.  
- `reset()/resetValidation()` para estado post envío.

**Resultado técnico:** `[3-5 líneas]`.

---

## 7) Evidencia de pruebas y validación técnica

### Pruebas ejecutadas

- `[comando 1: php artisan test --compact ...]`  
- `[comando 2: npm run build]`  
- `[comando 3: pint --dirty --format agent]`

### Resultado

- `[indica cantidad de tests pasados]`  
- `[indica estado de build y formato]`

---

## 8) Capturas sugeridas (para anexos)

Incluye evidencias visuales con pie de figura:

1. Home en escritorio.  
2. Home en móvil con menú abierto.  
3. Búsqueda y filtro de servicios funcionando.  
4. Detalle dinámico de servicios.  
5. Botón “Ver más noticias”.  
6. Formulario inválido (botón deshabilitado).  
7. Formulario válido (botón habilitado).  
8. Mensaje de envío exitoso.

---

## 9) Uso de Inteligencia Artificial (declaración obligatoria)

**¿Se utilizó IA?:** `[Sí / No]`

**Herramienta(s):** `[Nombre de IA]`

**Justificación técnica (mínimo 3 razones):**

1. `[Razón 1: apoyo en estructuración de componentes y organización del trabajo.]`  
2. `[Razón 2: apoyo en revisión de consistencia y propuestas de mejora visual.]`  
3. `[Razón 3: apoyo en redacción técnica y checklist de criterios de rúbrica.]`

**Importante:** La implementación final, validación funcional y decisiones técnicas fueron revisadas y verificadas por el estudiante.

---

## 10) Conclusión

El proyecto desarrollado permitió aplicar de manera integrada interactividad, validación de datos, actualización dinámica del DOM, diseño responsivo, accesibilidad y patrones de arquitectura frontend utilizando Laravel + Livewire + Tailwind CSS.

En función de la evidencia técnica y pruebas ejecutadas, se concluye que la solución cumple los requerimientos de la evaluación U2 y presenta una base sólida para mantenimiento y evolución futura.

---

## 11) Referencias (formato APA 7)

> Reemplaza por tus fuentes reales.

- Laravel. (2024). *Laravel documentation*. https://laravel.com/docs  
- Livewire. (2024). *Livewire documentation*. https://livewire.laravel.com/docs  
- Tailwind Labs. (2024). *Tailwind CSS documentation*. https://tailwindcss.com/docs  
- W3C. (2018). *Web Content Accessibility Guidelines (WCAG) 2.1*. https://www.w3.org/TR/WCAG21/

---

## 12) Checklist final antes de entregar

- [ ] El informe cubre el **100%** del contenido solicitado.  
- [ ] Sección CE1 a CE8 completa con evidencia concreta.  
- [ ] Se declara uso de IA explícitamente con **3 razones**.  
- [ ] Ortografía y coherencia revisadas.  
- [ ] Referencias en formato APA 7 incluidas.  
- [ ] Formato y nombre de archivo según instrucciones del docente.
