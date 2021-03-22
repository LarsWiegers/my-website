<?php

namespace App\Models;

use App\Services\EstimatedReadingTimeService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Models\Gutenbergable;

class Post extends Model
{
    use HasFactory, Gutenbergable;

    /**
     * @var EstimatedReadingTimeService
     */
    public $estimatedReadingTimeService;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->estimatedReadingTimeService = resolve(EstimatedReadingTimeService::class);
    }

    public $fillable = [
        'title',
        'body',
    ];

    public function readingTime() {
        return $this->estimatedReadingTimeService->estimateWithLarabergBody($this->getRenderedContent());
    }
}
