<?php

namespace App\DTO;

final readonly class MunicipalServiceData
{
    public function __construct(
        public int $id,
        public string $title,
        public string $category,
        public string $summary,
        public string $description,
        public string $actionText,
        public string $tag,
    ) {}

    /**
     * @return array{id: int, title: string, category: string, summary: string, description: string, actionText: string, tag: string}
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'summary' => $this->summary,
            'description' => $this->description,
            'actionText' => $this->actionText,
            'tag' => $this->tag,
        ];
    }
}
