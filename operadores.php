<?php // OPERADORES

// ---- Operadores de Atribuição ----

    // Atribuição "=" - Atribui o valor da direita a uma variável a esquerda.
    $nome = "João"; $acao = " foi";

    // Concatenação "." - Soma o valor da sua direita com o da esquerda.
    $frase = $nome . $acao; echo $frase . "<br>"; // João foi

    // Atribuição com concatenação ".=" - Soma o valor da direita com o valor da variável a esquerda
    // e atribui o novo valor a essa variável.
    $frase .= " jogar bola."; echo $frase . "<br>"; // João foi jogar bola.

    // Operadores de atribuição para números.
    $carteira = 10;
    $valorAtribuicao = 5;
    // O operador "+=" adiciona o valor de atribuição a carteira.
    $carteira += $valorAtribuicao; echo $carteira . "<br>"; // 15
    // O operador "-=" subtrai o valor de atribuição da carteira.
    $carteira -= $valorAtribuicao; echo $carteira . "<br>"; // 10
    // O operador "*=" multiplica a carteira pelo valor de atribuição.
    $carteira *= $valorAtribuicao; echo $carteira . "<br>"; // 50
    // O operador "/=" divide a carteira pelo valor de atribuição.
    $carteira /= $valorAtribuicao; echo $carteira . "<br>"; // 10
    // O operador "**=" eleva a carteira pelo valor de atribuição.
    $carteira **= $valorAtribuicao; echo $carteira . "<br>"; // 100000
    // O operador "%=" divide a carteira pelo valor de atribuição, mas recebe a sobra da divisão como resultado.
    $carteira %= $valorAtribuicao; echo $carteira . "<br>"; // 0


// ---- Operadores Aritméticos ----

    // Adição "+" - Soma entrem dois valores numéricos.
    echo (2 + 4) . "<br>"; // 6

    // Subtração "-" - Subtrai o valor da direita do valor a esquerda.
    echo (4 - 2) . "<br>"; // 2

    // Multiplicação "*" - Multiplica dois valores numéricos.
    echo (2 * 5) . "<br>"; // 10

    // Divisão "/" - Divide o valor da direita do valor a esquerda.
    echo (10 / 3) . "<br>"; // 3.33...

    // Módulo "%" - Realiza a mesma operação da Divisão, mas obtém como resultado a sobra da divisão.
    echo (10 % 3) . "<br>"; // 1

    // Exponencial "**" - Eleva o número da esquerda pelo número da direita.
    echo (10 ** 2) . "<br>"; // 100

// ---- Operadores de Comparação ----

    // Maior que ">" - Compara se o valor da esquerda é maior que o da direita.
    var_dump(10 > 5, 10 > 10, 10 > 20); echo "<br>"; // true, false, false

    // Menor que "<" - Compara se o valor da esquerda é menor que o da direita.
    var_dump(10 < 5, 10 < 10, 10 < 20); echo "<br>"; // false, false, true

    // Maior ou igual que ">=" - Compara se o valor da esquerda é maior ou igual que o da direita.
    var_dump(10 >= 5, 10 >= 10, 10 >= 20); echo "<br>"; // true, true, false

    // Menor ou igual que "<=" - Compara se o valor da esquerda é menor ou igual que o da direita.
    var_dump(10 <= 5, 10 <= 10, 10 <= 20); echo "<br>"; // false, true, true

    // Igual que "==" - Compara se os dois valores são iguais.
    var_dump(10 == 5, 10 == 10, 10 == 20); echo "<br>"; // false, true, false

    // Diferente de "!=" - Compara se os dois valores são diferentes.
    var_dump(10 != 5, 10 != 10, 10 != 20); echo "<br>"; // true, false, true

    // Igual que, com o mesmo tipo de dado "===" - Compara se os dois valores são iguais e possuem 
    // o mesmo tipo de dado.
    var_dump(10 === 5, 10 === 10, 10 === 10.0); echo "<br>"; // false, true, false

    // Diferente de, com o mesmo tipo de dado "!==" - Compara se os dois valores são diferentes 
    // e possuem o mesmo tipo de dado.
    var_dump(10 !== 5, 10 !== 10, 10 !== 10.0); echo "<br>"; // true, false, false

    // Spaceship "<=>" - Compara os dois valores e retorna:
    // -1, caso o valor da esquerda seja menor que o da direita;
    // 0, caso os valores sejam iguais;
    // 1, caso o valor da esquerda seja maior que o da direita.
    var_dump(5 <=> 10, 10 <=> 10, 10 <=> 5); echo "<br>"; // -1, 0, 1

    // Null Coalescing "??" - Verifica se a variável da esquerda possui o valor null, se não, ele
    // apresenta o valor da esquerda, se sim, ele apresenta o da direita e finaliza a operação.
    echo (0 ?? 10 ?? 20) . "<br>"; // 0
    echo (null ?? 10 ?? 20) . "<br>"; // 10
    echo (null ?? null ?? 20) . "<br>"; // 20

    // ---- Operadores de Incrementação e Decrementação ----

    $valorExemplo = 10;
    // Operador de incrementação "++" - A esquerda da váriavel ele soma mais 1 antes de apresenta-lá,
    // a direita da variável ele soma mais 1 após apresenta-lá. 
    echo ($valorExemplo++) . "<br>"; // 10
    echo ($valorExemplo) . "<br>"; // 11
    echo (++$valorExemplo) . "<br>"; // 12

    // Operador de decrementação "--" - A esquerda da váriavel ele subtrai 1 antes de apresenta-lá,
    // a direita da variável ele subtrai 1 após apresenta-lá. 
    echo ($valorExemplo--) . "<br>"; // 12
    echo ($valorExemplo) . "<br>"; // 11
    echo (--$valorExemplo) . "<br>"; // 10
?>