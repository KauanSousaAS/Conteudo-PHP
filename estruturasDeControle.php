<?php // ESTRUTURAS DE CONTROLE

// ---- Include e Require ----

    // Include e Require operam na inclusão de outros arquivos em seu código.
    // include('arquivo'); require('arquivo');

    // Include: Verifica e inclui o arquivo chamado onde o include foi executado, caso o
    // arquivo não exista ou tenha algum erro, o arquivo incluído não será executado.

    // Require: Realiza a mesma operação que o Include, porem, caso o arquivo não exista
    // ou esteja com algum erro, o arquivo principal (onde está a função "require('');")
    // não será executado.
            // Nota: No PHP7 os erros fatais no require que interrompem
                  // a execução do arquivo principal agora são exeções
                  // que podem ser tratadas com try/catch.
    
    // Caso tente incluir ou requerir o mesmo arquivo mais de uma vez, ocorrerá um erro,
    // para tratar isso se utiliza o "_once".
    // include_once('arquivo'); require_once('arquivo');
    // Assim o arquivo só será chamado uma vez e não ocorrerá erro por inclusão ou
    // requerimento do mesmo arquivo.

    // Em um grande projeto é esperado que exista inumeras pastas e arquivos que o
    // compõem, tendo isso em mente, é necessário entender como incluir ou requerir
    // arquivos de diferentes diretórios, para isso temos o exemplo:

    // *: pasta | -: arquivo
    //  * PROJETO
    //      - arquivoPrimario
    //      - funcaoPrimaria
    //      * SECUNDARIO
    //          - arquivoSecundario
    //          - funcaoSecundaria
    //          * TERCIARIO
    //              - arquivoTerciario
    //              - funcaoTerciaria

    // Ex01: No "arquivoPrimario" quero incluir a "funcaoPrimaria":
    // include('funcaoPrimaria');
    // Para incluir um arquivo da mesma pasta, basta informar o nome do arquivo.

    // Ex02: No "arquivoPrimario" quero incluir a "funcaoSecundaria":
    // include('SECUNDARIO/funcaoSecundaria');
    // Para incluir um arquivo de uma pasta adiante, devesse informar o nome da pasta
    // onde o arquivo está alocado e o nome do arquivo.

    // Ex03: No "arquivoPrimario" quero incluir a "funcaoTerciaria":
    // include('SECUNDARIO/TERCIARIO/funcaoTerciaria');
    // Para incluir um arquivo de mais de uma pasta adiante, devesse informar o caminho
    // até chegar na pasta do arquivo e então informar o arquivo.

    // Ex04: No "arquivoSecundario" quero incluir a "funcaoPrimaria":
    // include('../funcaoPrimaria');
    // Para incluir um arquivo de uma pasta anterior, devesse utilizar "../" para retornar
    // um diretório e então informar o nome do arquivo.

    // Ex05: No "arquivoTerciario" quero incluir a "funcaoPrimaria":
    // include('../../funcaoPrimaria');
    // Para incluir um arquivo de mais de uma pasta anterior, devesse utilizar "../" até
    // retornar a pasta onde está o arquivo e informar o nome do arquivo.
    


?>    