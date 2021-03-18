<?php


namespace App\Services;


class EstimatedReadingTimeService
{
    public function estimateWithLarabergBody($body) {
        return $this->getEstimateReadingTime(strip_tags($body));
    }

    /**
     * Returns an estimated reading time in a string
     * idea from @link http://briancray.com/posts/estimated-reading-time-web-design/
     * @param  string $content the content to be read
     * @param int $wpm
     * @return string          estimated read time eg. 1 minute, 30 seconds
     **/
    private function getEstimateReadingTime($content, $wpm = 200) {
        $wordCount = str_word_count($content);

        $minutes = (int) floor($wordCount / $wpm);
        $seconds = (int) floor($wordCount % $wpm / ($wpm / 60));

        $str_minutes = ($minutes === 1) ? 'minute' : 'minutes';
        $str_seconds = ($seconds === 1) ? 'second' : 'seconds';

        if ($minutes === 0) {
            return "{$seconds} {$str_seconds}";
        }
        else {
            return "{$minutes} {$str_minutes}, {$seconds} {$str_seconds}";
        }
    }
}
