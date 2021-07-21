<?php

// comma isn't a operator
// $a = 1, 2, 3;
// var_dump($a);

switch (1) {
    case "1":
        var_dump('not same types');
        break;
    case 1:
        var_dump('same types');
        break;
}
