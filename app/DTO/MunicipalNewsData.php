<?php

namespace App\DTO;

final readonly class MunicipalNewsData
{
    public function __construct(
        public int $id,
        public string $title,
        public string $excerpt,
        public string $date,
        public string $category,
    ) {}

    /**
     * @return array{id: int, title: string, excerpt: string, date: string, category: string}
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'date' => $this->date,
            'category' => $this->category,
        ];
    }
}
