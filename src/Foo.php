<?php

namespace YourProject;

use ArrayObject;

class Foo extends ArrayObject
{
    public function __construct()
    {
        // here be dragons
    }

    public function fooBar()
    {
        array_map([], function ($v) {
            // hm
        });
    }
}
