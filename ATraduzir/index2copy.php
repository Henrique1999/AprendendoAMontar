<?php

/* // Abre o arquivo valores.csv para leitura
$file = fopen('valores.csv', 'r');

// Lê a primeira linha do arquivo e salva em $header
$header = fgetcsv($file);

// Fecha o arquivo
fclose($file);

// Imprime o cabeçalho
print_r($header);
 */
?>








<?php
/* 
// Abre o arquivo valores.csv para leitura
$file = fopen('valores.csv', 'r');

// Ignora a primeira linha do arquivo (cabeçalho)
$header = fgetcsv($file);

// Lê a segunda linha do arquivo e salva em $row
$row = fgetcsv($file);

// Fecha o arquivo
fclose($file);

// Imprime a segunda linha
print_r($row);
 */
?>








<?php

// Abre o arquivo valores.csv para leitura
$file = fopen('valores.csv', 'r');

// Ignora a primeira linha do arquivo (cabeçalho)
$header = fgetcsv($file);

// Lê todas as linhas do arquivo e salva em $rows
$rows = array();
while (($row = fgetcsv($file)) !== FALSE) {
  $rows[] = $row;
}

// Fecha o arquivo
fclose($file);

// Imprime todas as linhas
print_r($rows);

?>

["elemento1", "elemento2", "elemento3"]

{
  "todosElementos" : ["elemento1", "elemento2", "elemento3"]
}



Array
(
    [0] => Array
        (
            [0] => 2022-01-01 08:00:00
            [1] => 2022-01-01 09:00:00
            [2] => 2022-01-01 10:00:00
            [3] => 2022-01-01 11:00:00
            [4] => 10
            [5] => 20
            [6] => 30
            [7] => 40
            [8] => 50
            [9] => 60
            [10] => 70
            [11] => 80
            [12] => 90
            [13] => 100
            [14] => Exemplo de texto 1
            [15] => Exemplo de texto 2
            [16] => Exemplo de texto 3
            [17] => Texto 1,Texto 2
            [18] => Texto 3,Texto 4
        )

    [1] => Array
        (
            [0] => 2021-12-20 12:30:45
            [1] => 2021-12-21 15:20:10
            [2] => 2021-12-22 08:00:00
            [3] => 2021-12-23 19:30:15
            [4] => 23
            [5] => 45
            [6] => 10
            [7] => 8
            [8] => 7
            [9] => 56
            [10] => 34
            [11] => 12
            [12] => 98
            [13] => 75
            [14] => texto1
            [15] => texto2
            [16] => texto3
            [17] => texto4
            [18] => texto5
        )

    [2] => Array
        (
            [0] => 2021-12-24 22:45:00
            [1] => 2021-12-25 07:15:30
            [2] => 2021-12-26 18:20:00
            [3] => 2021-12-27 11:10:45
            [4] => 89
            [5] => 12
            [6] => 34
            [7] => 56
            [8] => 78
            [9] => 90
            [10] => 23
            [11] => 45
            [12] => 67
            [13] => 89
            [14] => um texto qualquer
            [15] => outro texto
            [16] => mais um texto
            [17] => texto
            [18] => teste de texto
        )

    [3] => Array
        (
            [0] => 2021-12-28 16:30:00
            [1] => 2021-12-29 09:45:20
            [2] => 2021-12-30 11:11:11
            [3] => 2021-12-31 23:59:59
            [4] => 15
            [5] => 20
            [6] => 25
            [7] => 30
            [8] => 35
            [9] => 40
            [10] => 45
            [11] => 50
            [12] => 55
            [13] => 60
            [14] => texto1
            [15] => texto2
            [16] => texto3
            [17] => texto4
            [18] => texto5
        )

    [4] => Array
        (
            [0] => 2022-01-01 00:00:00
            [1] => 2022-01-02 08:45:10
            [2] => 2022-01-03 17:30:20
            [3] => 2022-01-04 12:05:55
            [4] => 1
            [5] => 3
            [6] => 5
            [7] => 7
            [8] => 9
            [9] => 11
            [10] => 13
            [11] => 15
            [12] => 17
            [13] => 19
            [14] => um texto qualquer
            [15] => outro texto
            [16] => mais um texto
            [17] => texto
            [18] => teste de texto
        )

    [5] => Array
        (
            [0] => 2022-01-05 06:30:45
            [1] => 2022-01-06 15:10:00
            [2] => 2022-01-07 12:45:30
            [3] => 2022-01-08 20:30:00
            [4] => 100
            [5] => 200
            [6] => 300
            [7] => 400
            [8] => 500
            [9] => 600
            [10] => 700
            [11] => 800
            [12] => 900
            [13] => 1000
            [14] => texto1
            [15] => texto2
            [16] => texto3
            [17] => texto4
            [18] => texto5
        )

    [6] => Array
        (
            [0] => 2022-01-09 14:00:00
            [1] => 2022-01-10 22:30:45
            [2] => 2022-01-11 19:20:00
            [3] => 2022-01-12 06:15:15
            [4] => 55
            [5] => 44
            [6] => 33
            [7] => 22
            [8] => 11
            [9] => 99
            [10] => 88
            [11] => 77
            [12] => 66
            [13] => 55
            [14] => um texto qualquer
            [15] => outro texto
            [16] => mais um texto
            [17] => texto
            [18] => teste de texto
        )

    [7] => Array
        (
            [0] => 2022-01-02 08:00:00
            [1] => 2022-01-02 09:00:00
            [2] => 2022-01-02 10:00:00
            [3] => 2022-01-02 11:00:00
            [4] => 25
            [5] => 20
            [6] => 35
            [7] => 50
            [8] => 15
            [9] => 60
            [10] => 75
            [11] => 80
            [12] => 95
            [13] => Lorem ipsum dolor sit amet
            [14] => consectetur adipiscing elit
            [15] => Ut venenatis
            [16] => Praesent rutrum,magna
            [17] => vel bibendum urna
        )

    [8] => Array
        (
            [0] => 2022-01-03 08:00:00
            [1] => 2022-01-03 09:00:00
            [2] => 2022-01-03 10:00:00
            [3] => 2022-01-03 11:00:00
            [4] => 40
            [5] => 60
            [6] => 80
            [7] => 10
            [8] => 30
            [9] => 70
            [10] => 55
            [11] => 90
            [12] => 25
            [13] => Vivamus eget
            [14] => aliquet urna
            [15] => Nam tincidunt
            [16] => Fusce aliquam,risus
            [17] => in pretium felis
        )

    [9] => Array
        (
            [0] => 2022-01-04 08:00:00
            [1] => 2022-01-04 09:00:00
            [2] => 2022-01-04 10:00:00
            [3] => 2022-01-04 11:00:00
            [4] => 70
            [5] => 50
            [6] => 20
            [7] => 90
            [8] => 40
            [9] => 10
            [10] => 30
            [11] => 80
            [12] => 60
            [13] => Aenean varius
            [14] => dolor et tincidunt
            [15] => Sed gravida
            [16] => Morbi tristique risus
            [17] => nec blandit neque
        )

    [10] => Array
        (
            [0] => 2022-01-05 08:00:00
            [1] => 2022-01-05 09:00:00
            [2] => 2022-01-05 10:00:00
            [3] => 2022-01-05 11:00:00
            [4] => 15
            [5] => 30
            [6] => 70
            [7] => 85
            [8] => 40
            [9] => 60
            [10] => 50
            [11] => 20
            [12] => 90
            [13] => Duis vitae
            [14] => tellus congue
            [15] => Maecenas volutpat
            [16] => Suspendisse eu risus
            [17] => auctor nunc
        )

    [11] => Array
        (
            [0] => 2022-01-06 08:00:00
            [1] => 2022-01-06 09:00:00
            [2] => 2022-01-06 10:00:00
            [3] => 2022-01-06 11:00:00
            [4] => 55
            [5] => 40
            [6] => 25
            [7] => 20
            [8] => 30
            [9] => 75
            [10] => 85
            [11] => 65
            [12] => 95
            [13] => Pellentesque
            [14] => ornare ultricies
            [15] => Nunc quis
            [16] => Morbi in mauris
            [17] => semper ex
        )

    [12] => Array
        (
            [0] => 2022-01-07 08:00:00
            [1] => 2022-01-07 09:00:00
            [2] => 2022-01-07 10:00:00
            [3] => 2022-01-07 11:00:00
            [4] => 80
            [5] => 15
            [6] => 45
            [7] => 50
            [8] => 30
            [9] => 65
            [10] => 10
            [11] => 55
            [12] => 90
            [13] => Vestibulum
            [14] => nec mauris
            [15] => Nam mollis
            [16] => Maecenas scelerisque
            [17] => nisi at justo
        )

    [13] => Array
        (
            [0] => 2022-01-08 08:00:00
            [1] => 2022-01-08 09:00:00
            [2] => 2022-01-08 10:00:00
            [3] => 2022-01-08 11:00:00
            [4] => 25
            [5] => 75
            [6] => 40
            [7] => 30
            [8] => 90
            [9] => 55
            [10] => 60
            [11] => 10
            [12] => 20
            [13] => Aliquam erat
            [14] => volutpat
            [15] => Curabitur eu
            [16] => Etiam non semper
            [17] => lectus non hendrerit
        )

    [14] => Array
        (
            [0] => 2022-01-02 12:00:00
            [1] => 2022-01-02 13:00:00
            [2] => 2022-01-02 14:00:00
            [3] => 2022-01-02 15:00:00
            [4] => 15
            [5] => 25
            [6] => 35
            [7] => 45
            [8] => 55
            [9] => 65
            [10] => 75
            [11] => 85
            [12] => 95
            [13] => 105
            [14] => Mais um exemplo de texto 1
            [15] => Mais um exemplo de texto 2
            [16] => Mais um exemplo de texto 3
            [17] => Texto 5, Texto 6
            [18] => Texto 7, Texto 8
        )

    [15] => Array
        (
            [0] => 2022-01-03 16:00:00
            [1] => 2022-01-03 17:00:00
            [2] => 2022-01-03 18:00:00
            [3] => 2022-01-03 19:00:00
            [4] => 20
            [5] => 30
            [6] => 40
            [7] => 50
            [8] => 60
            [9] => 70
            [10] => 80
            [11] => 90
            [12] => 100
            [13] => 110
            [14] => Outro exemplo de texto 1
            [15] => Outro exemplo de texto 2
            [16] => Outro exemplo de texto 3
            [17] => Texto 9, Texto 10
            [18] => Texto 11, Texto 12
        )

    [16] => Array
        (
            [0] => 2022-01-04 20:00:00
            [1] => 2022-01-04 21:00:00
            [2] => 2022-01-04 22:00:00
            [3] => 2022-01-04 23:00:00
            [4] => 25
            [5] => 35
            [6] => 45
            [7] => 55
            [8] => 65
            [9] => 75
            [10] => 85
            [11] => 95
            [12] => 105
            [13] => 115
            [14] => Exemplo 4 de texto
            [15] => Exemplo 5 de texto
            [16] => Exemplo 6 de texto
            [17] => Texto 13, Texto 14
            [18] => Texto 15, Texto 16
        )

    [17] => Array
        (
            [0] => 2022-01-05 00:00:00
            [1] => 2022-01-05 01:00:00
            [2] => 2022-01-05 02:00:00
            [3] => 2022-01-05 03:00:00
            [4] => 30
            [5] => 40
            [6] => 50
            [7] => 60
            [8] => 70
            [9] => 80
            [10] => 90
            [11] => 100
            [12] => 110
            [13] => 120
            [14] => Exemplo de texto 7
            [15] => Exemplo de texto 8
            [16] => Exemplo de texto 9
            [17] => Texto 17, Texto 18
            [18] => Texto 19, Texto 20
        )

    [18] => Array
        (
            [0] => 2022-01-06 04:00:00
            [1] => 2022-01-06 05:00:00
            [2] => 2022-01-06 06:00:00
            [3] => 2022-01-06 07:00:00
            [4] => 35
            [5] => 45
            [6] => 55
            [7] => 65
            [8] => 75
            [9] => 85
            [10] => 95
            [11] => 105
            [12] => 115
            [13] => 125
            [14] => Exemplo 10 de texto
            [15] => Exemplo 11 de texto
            [16] => Exemplo 12 de texto
            [17] => Texto 21, Texto 22
            [18] => Texto 23, Texto 24
        )

    [19] => Array
        (
            [0] => 2022-01-07 08:00:00
            [1] => 2022-01-07 09:00:00
            [2] => 2022-01-07 10:00:00
            [3] => 2022-01-07 11:00:00
            [4] => 40
            [5] => 50
            [6] => 60
            [7] => 70
            [8] => 80
            [9] => 90
            [10] => 100
            [11] => 110
            [12] => 120
            [13] => 130
            [14] => Exemplo de texto 13
            [15] => Exemplo de texto 14
            [16] => Exemplo de texto 15
            [17] => Texto 25, Texto 26
            [18] => Texto 27, Texto 28
        )



{
  "IDprincipal" : "Exemplo de texto 1"
  "data1" : "2022-01-01 09:00:00"
  "data2" : "2022-01-01 10:00:00"
  "data3" : "2022-01-01 11:00:00"
  "data4" : "2022-01-01 08:00:00"
  "numero1" : "10"
  "numero2" : "20"
  "numero3" : "30"
  "numero4" : "40"
  "numero5" : "50"
  "numero6" : "60"
  "numero7" : "70"
  "numero8" : "80"
  "numero9" : "90"
  "numero10" : "100"
  "texto1" : "Exemplo de texto 2"
  "texto2" : "Exemplo de texto 3"
  "multiTexto1" : ["Texto 1", "Texto 2"]
  "multiTexto2" : ["Texto 3", "Texto 4"]
}






$data = [
  [
    2022-01-01 08:00:00,
    2022-01-01 09:00:00,
    2022-01-01 10:00:00,
    2022-01-01 11:00:00,
    10,
    20,
    30,
    40,
    50,
    60,
    70,
    80,
    90,
    100,
    "Exemplo de texto 1",
    "Exemplo de texto 2",
    "Exemplo de texto 3",
    "Texto 1, Texto 2",
    "Texto 3, Texto 4"
  ],
  [
    2021-12-20 12:30:45,
    2021-12-21 15:20:10,
    2021-12-22 08:00:00,
    2021-12-23 19:30:15,
    23,
    45,
    10,
    8,
    7,
    56,
    34,
    12,
    98,
    75,
    "texto1",
    "texto2",
    "texto3",
    "texto4, outrotexto",
    "texto5, outrotexto2"
  ]
]