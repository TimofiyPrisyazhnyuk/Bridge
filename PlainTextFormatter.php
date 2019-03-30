<?php

/**
 * Class PlainTextFormatter
 */
class PlainTextFormatter implements Formatter
{
    /**
     * @param string $text
     * @return string
     */
    public function format(string $text): string
    {
        return $text;
    }
}
