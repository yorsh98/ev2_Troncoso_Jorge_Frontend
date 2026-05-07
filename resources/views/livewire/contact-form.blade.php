<section id="contacto" class="bg-white py-20" aria-labelledby="contact-title">
    <div class="mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-[0.8fr_1.2fr] lg:px-8">
        <div>
            <p class="text-sm font-bold uppercase tracking-[0.24em] text-[#0077A8]">Contacto ciudadano</p>
            <h2 id="contact-title" class="mt-3 text-3xl font-black tracking-tight text-[#123B63] sm:text-4xl">Formulario con validación en tiempo real</h2>
            <p class="mt-4 text-lg leading-8 text-slate-600">El botón se habilita solo cuando todos los campos cumplen las reglas obligatorias.</p>
            <div class="mt-8 rounded-3xl bg-[#E8F6FB] p-6">
                <p class="font-black text-[#123B63]">Estado del envío</p>
                <p class="mt-2 text-slate-700" aria-live="polite">{{ $this->canSubmit ? 'Formulario completo y listo para enviar.' : 'Complete el formulario para enviar.' }}</p>
            </div>
        </div>

        <form wire:submit="submit" class="rounded-[2rem] border border-slate-200 bg-[#F4F7FA] p-5 shadow-xl shadow-sky-900/10 sm:p-8" novalidate>
            @if ($successMessage)
                <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 p-4 text-green-900" role="status" aria-live="polite">
                    <p class="font-bold">{{ $successMessage }}</p>
                </div>
            @endif

            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="name" class="block text-sm font-bold text-[#123B63]">Nombre completo</label>
                    <input id="name" type="text" wire:model.live.debounce.250ms="name" aria-describedby="name-error" @class(['mt-2 w-full rounded-2xl border bg-white px-4 py-3 text-base focus:outline-none focus:ring-4 focus:ring-[#38A9D6]/30', 'border-red-500' => $errors->has('name'), 'border-green-500 focus:border-[#3A8F5A]' => filled($name) && ! $errors->has('name'), 'border-slate-300 focus:border-[#0077A8]' => blank($name) && ! $errors->has('name')])>
                    <x-ui.input-error for="name" />
                </div>

                <div>
                    <label for="email" class="block text-sm font-bold text-[#123B63]">Correo electrónico</label>
                    <input id="email" type="email" wire:model.live.debounce.250ms="email" aria-describedby="email-error" @class(['mt-2 w-full rounded-2xl border bg-white px-4 py-3 text-base focus:outline-none focus:ring-4 focus:ring-[#38A9D6]/30', 'border-red-500' => $errors->has('email'), 'border-green-500 focus:border-[#3A8F5A]' => filled($email) && ! $errors->has('email'), 'border-slate-300 focus:border-[#0077A8]' => blank($email) && ! $errors->has('email')])>
                    <x-ui.input-error for="email" />
                </div>

                <div>
                    <label for="subject" class="block text-sm font-bold text-[#123B63]">Asunto</label>
                    <input id="subject" type="text" wire:model.live.debounce.250ms="subject" aria-describedby="subject-error" @class(['mt-2 w-full rounded-2xl border bg-white px-4 py-3 text-base focus:outline-none focus:ring-4 focus:ring-[#38A9D6]/30', 'border-red-500' => $errors->has('subject'), 'border-green-500 focus:border-[#3A8F5A]' => filled($subject) && ! $errors->has('subject'), 'border-slate-300 focus:border-[#0077A8]' => blank($subject) && ! $errors->has('subject')])>
                    <x-ui.input-error for="subject" />
                </div>

                <div>
                    <label for="requestType" class="block text-sm font-bold text-[#123B63]">Tipo de solicitud</label>
                    <select id="requestType" wire:model.live="requestType" aria-describedby="requestType-error" @class(['mt-2 w-full rounded-2xl border bg-white px-4 py-3 text-base focus:outline-none focus:ring-4 focus:ring-[#38A9D6]/30', 'border-red-500' => $errors->has('requestType'), 'border-green-500 focus:border-[#3A8F5A]' => filled($requestType) && ! $errors->has('requestType'), 'border-slate-300 focus:border-[#0077A8]' => blank($requestType) && ! $errors->has('requestType')])>
                        <option value="">Selecciona una opción</option>
                        @foreach ($requestTypes as $type)
                            <option wire:key="request-type-{{ $type }}" value="{{ $type }}">{{ $type }}</option>
                        @endforeach
                    </select>
                    <x-ui.input-error for="requestType" />
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-bold text-[#123B63]">Mensaje</label>
                    <textarea id="message" rows="5" wire:model.live.debounce.250ms="message" aria-describedby="message-error message-help" @class(['mt-2 w-full rounded-2xl border bg-white px-4 py-3 text-base focus:outline-none focus:ring-4 focus:ring-[#38A9D6]/30', 'border-red-500' => $errors->has('message'), 'border-green-500 focus:border-[#3A8F5A]' => filled($message) && ! $errors->has('message'), 'border-slate-300 focus:border-[#0077A8]' => blank($message) && ! $errors->has('message')])></textarea>
                    <p id="message-help" class="mt-2 text-sm text-slate-600">{{ mb_strlen($message) }}/500 caracteres.</p>
                    <x-ui.input-error for="message" />
                </div>

                <div class="sm:col-span-2">
                    <label class="flex items-start gap-3 rounded-2xl bg-white p-4 text-sm font-semibold text-slate-700 ring-1 ring-slate-200">
                        <input type="checkbox" wire:model.live="consent" class="mt-1 size-5 rounded border-slate-300 text-[#0077A8] focus:ring-4 focus:ring-[#38A9D6]/30" aria-describedby="consent-error">
                        <span>Acepto que esta maqueta académica simule el registro de mi solicitud para demostrar validación e interacción.</span>
                    </label>
                    <x-ui.input-error for="consent" />
                </div>
            </div>

            <div class="mt-8">
                <x-ui.button type="submit" variant="{{ $this->canSubmit ? 'success' : 'primary' }}" class="w-full" :disabled="! $this->canSubmit" aria-disabled="{{ $this->canSubmit ? 'false' : 'true' }}">
                    {{ $this->canSubmit ? 'Enviar solicitud' : 'Complete el formulario para enviar' }}
                </x-ui.button>
            </div>
        </form>
    </div>
</section>
