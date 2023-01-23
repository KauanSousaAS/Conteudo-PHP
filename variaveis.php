<?php

// ---- Criando uma variável ----

// Estrutura da variável
// $<nome da variável>
// Exemplo:

    $variavel;

// Tipos de dados suportados pela variável PHP:
// integer, double/float, String, array e object.

    $integer = 10;
    $float = 5.5;
    $string = "Hello World!!";
    $array = array($integer, $float, $string);
    class exemplo
    {
        function funcao() {
            echo "Olá!!";
        }
    }
    $object = new exemplo;

// Resultado
    echo $integer; // 10
    echo $float; // 5.5
    echo $string; // Hello World!!
    print_r($array); // Array ( [0] => 10 [1] => 5.5 [2] => Hello World!! ) 
    $object -> funcao(); // Olá!!

// O PHP não é uma linguagem muito tipada, devido a isso,
// não a necessidade de especificar qual tipo de dado está
// sendo inserida em sua variável.
