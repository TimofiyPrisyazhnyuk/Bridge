<?php

namespace Bridge\Tests;

use HelloWorldService;
use HtmlFormatter;
use PlainTextFormatter;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class BridgeTest
 * @package Bridge\Tests
 */
class BridgeTest
{
    /**
     * Test bridge.
     */
    public function test()
    {
        echo (new HelloWorldService(new PlainTextFormatter()))->get();
        echo "\n";
        echo (new HelloWorldService(new HtmlFormatter()))->get();
        echo "\n";
    }
}

// Run test
(new BridgeTest())->test();