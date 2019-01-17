<?php
    // Escreva um programa que imprima números de 1 a 100.
    // Mas, para múltiplos de 3 imprima “Fizz” em vez do
    // número e para múltiplos de 5 imprima “Buzz”. Para
    // números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

    $brakeline = '<br />';
    foreach (range(1, 100) as $numero) {
        $msg = '';
        $msg .= $numero % 3 === 0 ? 'Fizz' : '';
        $msg .= $numero % 5 === 0 ? 'Buzz' : '';

        echo($msg ? $msg : $numero) . $brakeline;
    }
