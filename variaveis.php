<?php

// ---- Gerando uma variável ----

// Para criar uma variável é necessário inserir o cifrão($) e o nome da variável.
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
    $object = new DateTime(); // Object ( [date] => 2023-01-31 01:24:19.014620 [timezone_type] => 3 [timezone] => Europe/Berlin )
// Tipo especial
    $resource = fopen("variaveis.php", "r"); // atribui o arquivo a variável
    $null = null; // variável sem valor
    // Lembrete: Uma variável vazia é diferente de uma sem valor, para uma variavél
    // não ter valor algum ela deve ser criada com o atributo null como visto acima.

// ---- Variáveis pré-definidas ----

// As variáveis pré-definidas ou variáveis globais são variáveis internas do PHP que
// possuem determinados recursos e utilidades. Como exemplo, as variáveis $_GET e
// $_POST que são utilizadas para armazenar dos dados inseridos nos formulários.
// Também temos as variáveis mais relevantes como: $_SERVER, onde encontramos 
// informações do servidor e do usuário. $_SESSION, onde obtemos as informações das
// sessões referentes ao site, presentes na máquina do usuário. E $_COOKIES onde 
// obtemos informações dos cookies referentes ao site, presentes também na máquina 
// do usuário.

// ---- Escopo das variáveis ----

// O escopo da variável é basicamente até onde essa variável pode ser vista.
    session_start();
    // Lembrete: É necessário iniciar a sessão para a utilizarmos
    $_SESSION["codigoSessao"] = "123"; 
    // Variáveis pré-definidas são consideradas variáveis super globais, ou seja,
    // elas podem ser vistas por todo o PHP contido no arquivo. Além disso, 
    // variáveis como $_SESSION e $_COOKIES podem ser vistos até por outros arquivos.
    $chave = "321";
    // Variáveis globais são variáveis vistas somente pelo PHP do arquivo de origem.

    function funcao($a){
        // Nas funções as variáveis globais não são identificadas, para realizar essa 
        // idenificação temos dois métodos, Atribuir a variável a função (linha 96), sendo 
        // que a função tenha uma nova variável para armazenar a informação (linha 83 - $a)
        // ou inserir a variável na função em seguida de um "global" (linha 88)
        global $chave;
        $a; // 321
        $chave; // 321
        $_SESSION["codigoSessao"]; // 123
        // Diferente das globais, as variáveis super globais podem podem ser chamadas
        // nas funções sem qualquer preocupação já que nas funções essas variáveis já
        // são identificadas.
    }
    funcao($chave);
    // Lembrete: toda função precisa ser chamada para ser executada.
    $a; // sem valor, as variáveis criadas na função só são visíveis dentro da função.
    