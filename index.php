<?php

// #Questão 1 | COD:1013
function maiorAb(int $a, int $b)
{
    $maiorAb = (($a + $b + abs($a - $b)))/2;

    return $maiorAb;
}

$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));

echo maiorAb(maiorAb($a, $b), $c) . " eh o maior";

?>
