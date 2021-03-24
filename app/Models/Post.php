<?php

namespace App\Models;

use App\Services\EstimatedReadingTimeService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
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

    public function chapters() {
        $chapters = new Collection();

        $content = $this->getRenderedContent();

        // find all headings
        foreach(explode("\n", $content) as $line) {
            if(
                str_starts_with($line, "<h1") ||
                str_starts_with($line, "<h2") ||
                str_starts_with($line, "<h3") ||
                str_starts_with($line, "<h4") ||
                str_starts_with($line, "<h5") ||
                str_starts_with($line, "<h6")
            ) {
                $chapters->add($line);
            }
        }

        $urls = new Collection();

        // get the text and create urls for them
        foreach($chapters as $chapter) {
            //get what tag it is
            $tag = str_split($chapter, 3)[0];

            // replace first part of heading
            $line = str_replace($tag, "<a", $chapter);

            // make it a link instead of just the id
            $line = str_replace("id='", "href='#", $line);

            // replace end tag
            $line = str_replace(substr($tag,1) . ">", "a>", $line);

            // clean up
            $line = str_replace("\r", "", $line);

            $urls->push($line);
        }
        return $urls;
    }

    public function toSearchableArray()
    {
        $data = $this->toArray();
        unset($this->body);
        unset($this->lb_content);
        return $data;
    }
}
