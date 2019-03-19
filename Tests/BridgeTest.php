<?php

namespace Bridge\Tests;

use Bridge\HelloWorldService;
use Bridge\HtmlFormatter;
use Bridge\PlainTextFormatter;

require __DIR__ . "/../Formatter.php";
require __DIR__ . "/../Service.php";

foreach (glob("*.php") as $filename) {
    if (file_exists($file = __DIR__ . '/../' . $filename)) {
        require_once $file;
    }
}

class BridgeTest
{
    public function test()
    {
        echo (new HelloWorldService(new PlainTextFormatter()))->get();
        echo "\n";
        echo (new HelloWorldService(new HtmlFormatter()))->get();
        echo "\n";
    }
}

(new BridgeTest())->test();