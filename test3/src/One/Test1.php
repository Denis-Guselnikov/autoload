<?php

namespace One;
class Test1
{
    public function __construct()
    {
        echo 'its works!' . PHP_EOL;
    }
    public function do(): void
    {
        echo 'Doing Test1';
    }
}