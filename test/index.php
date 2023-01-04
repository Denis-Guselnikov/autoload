<?php

spl_autoload_register(function ($class)
{
    echo 'Загрузка:' . $class . PHP_EOL;
    require __DIR__ . '/classes/'. $class . '.php';
});

$a = new Test1();
$a -> do();

$b = new Test2();
$b -> do();
