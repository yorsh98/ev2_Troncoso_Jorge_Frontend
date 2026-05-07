<?php

namespace App\Livewire;

use App\Contracts\ServiceCatalogInterface;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ServiceDirectory extends Component
{
    public string $search = '';

    public string $category = 'Todas';

    public ?int $selectedServiceId = null;

    /**
     * @var array<int, array{id: int, title: string, category: string, summary: string, description: string, actionText: string, tag: string}>
     */
    public array $services = [];

    /**
     * @var array<int, string>
     */
    public array $categories = [];

    public function mount(ServiceCatalogInterface $catalog): void
    {
        $this->services = $catalog->all()
            ->map(fn ($service): array => $service->toArray())
            ->all();

        $this->categories = ['Todas', ...$catalog->categories()];
        $this->selectedServiceId = $this->services[0]['id'] ?? null;
    }

    public function updatedSearch(): void
    {
        $this->syncSelectedServiceWithResults();
    }

    public function updatedCategory(): void
    {
        $this->syncSelectedServiceWithResults();
    }

    public function selectService(int $serviceId): void
    {
        $this->selectedServiceId = $serviceId;
    }

    #[Computed]
    public function filteredServices(): array
    {
        $search = str($this->search)->lower()->trim()->toString();

        return collect($this->services)
            ->filter(fn (array $service): bool => $this->category === 'Todas' || $service['category'] === $this->category)
            ->filter(function (array $service) use ($search): bool {
                if ($search === '') {
                    return true;
                }

                $haystack = str($service['title'].' '.$service['summary'].' '.$service['category'].' '.$service['tag'])
                    ->lower()
                    ->toString();

                return str_contains($haystack, $search);
            })
            ->values()
            ->all();
    }

    #[Computed]
    public function selectedService(): ?array
    {
        return collect($this->services)->firstWhere('id', $this->selectedServiceId);
    }

    public function render(): mixed
    {
        return view('livewire.service-directory');
    }

    private function syncSelectedServiceWithResults(): void
    {
        $resultIds = collect($this->filteredServices)->pluck('id');

        if (! $this->selectedServiceId || ! $resultIds->contains($this->selectedServiceId)) {
            $this->selectedServiceId = $resultIds->first();
        }
    }
}
