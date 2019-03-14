<?php

require_once __DIR__ . '/vendor/autoload.php';

var_dump(get_class(A::create()));
$b = B::create();
var_dump(get_class($b));
// This will trigger "Call to undeclared method \A::doSomething"
$b->doSomething();
$c = C::create();
var_dump(get_class($c));
// This will not as the docBloc is rewritten
$c->doSomething();
