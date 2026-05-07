<?php

namespace App\Livewire;

use App\Contracts\ContactMessageInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $subject = '';

    public string $requestType = '';

    public string $message = '';

    public bool $consent = false;

    public ?string $successMessage = null;

    /**
     * @var array<int, string>
     */
    public array $requestTypes = [
        'Consulta general',
        'Solicitud municipal',
        'Reclamo o sugerencia',
        'Emergencia comunal',
    ];

    public function updated(string $property): void
    {
        $this->successMessage = null;
        $this->validateOnly($property);
    }

    public function submit(ContactMessageInterface $messages): void
    {
        $validated = $this->validate();

        $reference = $messages->submit([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'request_type' => $validated['requestType'],
            'message' => $validated['message'],
            'consent' => $validated['consent'],
        ]);

        $this->reset('name', 'email', 'subject', 'requestType', 'message', 'consent');
        $this->resetValidation();

        $this->successMessage = "Solicitud registrada correctamente. Código de seguimiento: {$reference}.";
    }

    #[Computed]
    public function canSubmit(): bool
    {
        return Validator::make($this->validationData(), $this->rules())->passes();
    }

    public function render(): mixed
    {
        return view('livewire.contact-form');
    }

    /**
     * @return array<string, list<string>>
     */
    protected function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:80'],
            'email' => ['required', 'email'],
            'subject' => ['required'],
            'requestType' => ['required'],
            'message' => ['required', 'min:10', 'max:500'],
            'consent' => ['accepted'],
        ];
    }

    /**
     * @return array<string, string>
     */
    protected function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre no puede superar 80 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Ingresa un correo electrónico válido.',
            'subject.required' => 'El asunto es obligatorio.',
            'requestType.required' => 'Selecciona un tipo de solicitud.',
            'message.required' => 'El mensaje es obligatorio.',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres.',
            'message.max' => 'El mensaje no puede superar 500 caracteres.',
            'consent.accepted' => 'Debes aceptar el consentimiento para enviar la solicitud.',
        ];
    }

    /**
     * @return array{name: string, email: string, subject: string, requestType: string, message: string, consent: bool}
     */
    private function validationData(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'requestType' => $this->requestType,
            'message' => $this->message,
            'consent' => $this->consent,
        ];
    }
}
