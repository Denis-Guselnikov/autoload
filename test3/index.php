<?php

namespace App\Test3;

require_once __DIR__ . '/vendor/autoload.php';

use One\Test1;
$test1 = new Test1();
$test1->do();

use Two\Test2;
$test2 = new Test2();
$test2->do();

use Three\Four\Test3;
$test3 = new Test3();
$test3->do();
