<?php
// define o timezone
date_default_timezone_set("America/Sao_Paulo");
// escrever uma frase que mostre a data atual 
echo "Hoje é dia " . date('F');
echo " e agora são " . date('g A');

$result = 10 * 20;
//echo  o resultado de 10 x 20 eh $result;
$result2 = 18 % intval(1.900);
$origin = date_create('28-02-2024');
$target = date_create('15-08-2024');
//$interval = date_diff($origin, $target);
//echo $interval->format('%R%a days');
echo $target->format('r d');

/*
    DESAFIOS
    1. Na função date(), substitua Y por y e observe o resultado;
    2. Pesquise com exibir a hora no formato 12 horas (A.M. e P.M.);
    3. Exiba o nome do mês atual;

    site oficial: php.net

    ******************** VARIÁVEIS EM PHP **********************
    Sempre precedidas de $ e n "ao conter caracteres especiais
    como: &, +, n, <, >, etc.

    $_variavel
    $variavel
    $_123
    $123

    Para atribuir um valor a $variavel, utilizamos =, ex:
    $carro = fusion;
    $cor = prata;

    onde lemos: a variável $carro receber fusion como valor.

    *******************SUPERGLOBAIS (PALAVRAS RESERVADAS) ************
    $_GET, $_POST, $_FILES, $_SESSION, $_COOKIE, $_REQUEST,
    $_SERVER, ETC.

    ***************OPERADORES**************
    Para realização de cálculos aritméticos utilizamos:
    (+) soma;
    (-) subtração;
    (*) multiplicação;
    (/) divisão;
    (%) resto.


    DESAFIO 2

    Utilizando variavéis e operadores aritméticos e execute os seguintes cálculos e imprima os resultados:
    1. multiplique 10 x 20;
    2. Calcule 18 % de 1.900.
    3. Utilizando a função de data, calcule a diferença de dias entre as datas: 28/02/2024 e hoje.
*/
?>