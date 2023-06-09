<?php
/**
 * #Questao 1 | COD:1013
 */
function maiorAb($a, $b)
{
    return ($a + $b + abs($a - $b))/2;
}

//$a = readline("10 9 358");
//$a = explode(" ", $a);

// echo maiorAb(maiorAb((int) $a[0], (int) $a[1]), (int) $a[2]) . " eh o maior";

/**
 * #Questao 2 | COD:1018
 */
function notas($valor)
{
    $notas = [1, 2, 5, 10, 20, 50, 100];
    $valorRestante = $valor;

    echo $valorRestante;
    foreach (array_reverse($notas) as $nota) {
        if ($valor <= 0) {
            return;
        }

        $notaQtd = ($valorRestante - ($valorRestante % $nota))/$nota;
        echo "\n" . $notaQtd. " nota(s) de R$ " . $nota;
        $valorRestante -= ($notaQtd * $nota);
    }
}

//notas((int) 576);

/**
 * #Questao 3 | COD:1133
*/

function questao3($x, $y) {
    if ($x < $y) {
        for ($i = $x + 1; $i < $y; $i++) {
            if (in_array($i % 5, [2, 3])) {
                echo "$i\n";
            }
        }
    } else {
        for ($i = $y + 1; $i < $x; $i++) {
            if (in_array($i % 5, [2, 3])) {
                echo "$i\n";
            }
        }
    }
}

#questao3(10, 18);

/**
 * #Questao 4 | COD:1101
*/

function questao4($m, $n) {
    $sum = 0;
    if ($m < $n) {
        for ($i = $m; $i <= $n; $i++) {
            $sum+= $i;
            echo "$i ";
        }
    } else {
        for ($i = $n; $i <= $m; $i++) {
            $sum+= $i;
            echo "$i ";
        }
    }

    echo "Sum =$sum";
}

#questao4(5, 0);

/**
 * #Questao 5 | COD:1789
*/

function questao5($grupos) {
    foreach ($grupos as $grupo) {
        $nivelVeloz = 1;
        foreach ($grupo as $lesma) {
            if ($lesma < 10 && $nivelVeloz == 1) {
                $nivelVeloz = 1;
            } else if ($lesma >= 10 && $lesma <= 2 && $nivelVeloz == 1) {
                $nivelVeloz = 2;
            } else if ($lesma >= 20 && $nivelVeloz != 3) {
                $nivelVeloz = 3;
            } 
        }

        echo "$nivelVeloz\n";
    }
}

/*questao5([
    [10],
    [10, 10, 10, 10, 15, 18, 20, 15,  11, 10],
    [10],
    [1, 5, 2, 9, 5, 5, 8, 4, 4, 3],
    [10],
    [19, 9, 1, 4, 5, 8, 6, 11, 9, 7]
]);*/


/**
 * #Questao 6 | COD:1071
*/
function questao6($x, $y) {
    $impares = [];
    if ($x < $y) {
        for ($i = $x+1; $i < $y; $i++) {
            if ($i % 2 != 0) {
                $impares[] = $i;
            }
        }
    } else {
        for ($i = $y+1; $i < $x; $i++) {
            if ($i % 2 != 0) {
                $impares[] = $i;
            }
        }
    }

    $sum = array_reduce($impares, function ($sum, $impar) {
        return $sum += $impar;
    });

    echo $sum;
}

#questao6(6, -5);

/**
 * #Questao 7 | COD:1103
*/
function questao7(int $h1, int $m1, int $h2, int $m2) {
    $horas = 0;
    $minutos = 0;
    // Outro dia
    if ($h1 > $h2 || ($h1 == $h2 && $m1 > $m2)) {
        $horas = abs($h1 - 24) + $h2;
    } else {
        // Mesmo dia
        $horas = abs($h1 - $h2);
    }

    if ($m1 > $m2) {
        $horas-= 1;
        $minutos = abs(($m1 - $m2) - 60);
    } else {
        $minutos = abs($m1 - $m2);
    }

    echo (($horas * 60) + $minutos) . "\n";
}

questao7("1", "5", "3", "5");
questao7("23", "59", "0", "34");
questao7("21", "33", "21", "10");
// questao7("0", "0", "0", "0");