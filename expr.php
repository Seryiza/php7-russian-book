<?php

echo sqrt(-1); // NAN
echo NAN + NAN; // NAN
echo gettype(NAN); // double

if (isset($somevar)) {
    echo '$somevar is set'; // never prints
}

$a = 0;
$b = 1;
echo $a = $b; // 1

$a = 100;
$b =& $a;
$a = 200;
echo "a = $a, b = $b"; // 200, 200

$color = 'red';
$red = 'rose';
echo $$color; // rose

echo 'php int size is ' . PHP_INT_SIZE; // 8
echo tRuE; // prints '1' (tRuE is a correct boolean value)

define("MY_CONST", 'hehehe');
if (defined("MY_CONST")) {
    echo MY_CONST; // hehehe
}

$constName = 'MY_CONST';
echo $$constName; // not working

print_r([1, 2, 3]);
var_dump([1, 2, 3]);
var_export([1, 2, 3]);

class PrivateClass {
    private $num = 100;
}

$p = new PrivateClass();
var_export($p);

// not working:
// $pFromVarExport = PrivateClass::__set_state(array(
//     'num' => 123,
// ));
// var_export($pFromVarExport);
