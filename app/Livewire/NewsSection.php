<?php

namespace App\Livewire;

use App\Contracts\NewsCatalogInterface;
use Livewire\Attributes\Computed;
use Livewire\Component;

class NewsSection extends Component
{
    public int $visibleNews = 3;

    /**
     * @var array<int, array{id: int, title: string, excerpt: string, date: string, category: string}>
     */
    public array $news = [];

    public function mount(NewsCatalogInterface $catalog): void
    {
        $this->news = $catalog->all()
            ->map(fn ($news): array => $news->toArray())
            ->all();
    }

    public function showMore(): void
    {
        $this->visibleNews = min($this->visibleNews + 3, count($this->news));
    }

    #[Computed]
    public function displayedNews(): array
    {
        return array_slice($this->news, 0, $this->visibleNews);
    }

    #[Computed]
    public function hasMoreNews(): bool
    {
        return $this->visibleNews < count($this->news);
    }

    public function render(): mixed
    {
        return view('livewire.news-section');
    }
}
