<?php

/**
 * Class Service
 */
abstract class Service
{
    /**
     * @var Formatter
     */
    protected $implementation;

    /**
     * @param Formatter $printer
     */
    public function __construct(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @param Formatter $printer
     */
    public function setImplementation(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * @return string
     */
    abstract public function get(): string;
}
