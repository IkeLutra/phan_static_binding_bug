<?php

require_once __DIR__ . '/vendor/autoload.php';

var_dump(get_class(A::create()));
$b = B::create();
var_dump(get_class($b));
$b->doSomething();
