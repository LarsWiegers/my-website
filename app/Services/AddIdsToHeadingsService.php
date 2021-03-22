<?php


namespace App\Services;


class AddIdsToHeadingsService
{
    /**
     * @param $body
     * @return string
     */
    public function execute($body)  {
        $lines = "";

        foreach(explode("\n", $body) as $line) {
            if(
                str_starts_with($line, "<h1") ||
                str_starts_with($line, "<h2") ||
                str_starts_with($line, "<h3") ||
                str_starts_with($line, "<h4") ||
                str_starts_with($line, "<h5") ||
                str_starts_with($line, "<h6")
            ) {
                // get the heading part
                $newLineStart = str_split($line,3);
                $tag = $newLineStart[0];

                // create id
                $id = str_replace(" ", "-", strip_tags($line));
                $id = str_replace("\r", "", $id);

                $newTag = $tag . " id='$id'";

                // replace heading part to now heading part + id
                $line = str_replace($tag, $newTag, $line);
                $lines .= $line;
            }else {
                $lines .= $line;
            }
            $lines .= "\n";
        }
        return $lines;
    }

}
