<?php

// ---- Gerando uma variável ----

// Para criar uma variável é necessário inserir o cifrão($) e o nome da variável
    $variavel;

// Com o comando unset(), a variável pode ser excluída.
    unset($variavel);

// Existem três restrições para criar uma variável
// 1ª Uma variável não pode possuir caracteres especiais, com exceção do underline(_). 
    $variável; // erro no "´".
    $maçã; // erro no "ç" e "~".
// 2ª Uma variável não pode ter um número após o cifrão.
//  $1exemplo
// 3ª Uma variável não pode ser criada com o nome de variaveis pré-definidas, como 
// "this", referente a objeto.
// É importante lembrar de criar as variáveis com algum tipo de formatação, como 
// exemplo, a CamelCase se baseia em escrever o primeiro nome da variável com a
// inicial minúscula, caso a variável tenha um nome composto os nomes seguintes devem 
// possuir a inicial Maiúscula.
    $dataNascimento;
    $nomeCliente;

// ---- Concatenação ----

// A concatenação é a união de duas variáveis, usando "." as variáveis podem ser 
// mescladas uma a outra criando um novo valor.
    $nome = "Kauan";
    $sobrenome = "Sousa";
    $nomeCompleto = $nome . $sobrenome; // KauanSousa
// O PHP atua em alguns casos na conversão da variável na concatenação.
    $numero = 102030; // int
    $codigo = $nome . $numero; // string: Kauan102030
    
// ---- Tipos de dados no PHP ----

// O PHP possui oito tipos de dados: Integer, double/float, boolean, String, array, 
// object, resource e null. Divididos por três grupos de dados: básicos, compostos 
// e especiais. Além disso, o PHP não é uma linguagem muito tipada, devido a isso, 
// não a necessidade de especificar qual tipo de dado está sendo inserida em sua 
// variável como na linguagem java.

// Tipo básico
    $integer = 10; // 10
    $float = 5.5; // 5.5
    $boolean = true; // atribui o valor verdadeiro
    $string = "Hello World!!"; // Hello World!!
// Tipo composto
    $array = array($integer, $float, $string); // Array ( [0] => 10 [1] => 5.5 [2] => Hello World!! )
    $object = new DateTime(); // DateTime Object ( [date] => 2023-01-31 01:24:19.014620 [timezone_type] => 3 [timezone] => Europe/Berlin )
// Tipo especial
    $resource = fopen("variaveis.php", "r"); // atribui o arquivo a variável
    $null = null; // variável sem valor
    // Lembrete: uma variável vazia é diferente de uma sem valor, para uma variavél
    // não ter valor algum ela deve ser criada com o atributo null como visto acima.
