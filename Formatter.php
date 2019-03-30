<?php

/**
 * Interface Formatter
 */
interface Formatter
{
    /**
     * @param string $text
     * @return string
     */
    public function format(string $text): string;
}
