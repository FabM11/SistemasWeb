<?php
include_once('../html/functions.php');
?>

<?php

//Array normal:
//$Array = [01, 02, 03, 04, 05];
//Posição    0   1   2   3   4

//Array associativo:
//$Array = ['Oi' => 01, 'Bom' => 02, 'Boa' => 03, 'Noite' => 04, 'Dia' => 05];
//Posição        Oi          Bom          Boa           Noite         Dia

$tabelaclientes = 
  [
1 => [
  'Nome' => 'Fabrício',
  'Cidade' => 'Jundiaí',
  'Idade' => 17
  ],
  
2 => [
  'Nome' => 'Davi',
  'Cidade' => 'Jundiaí',
  'Idade' => 17
],
3 => [
    'Nome' => 'Fernando',
    'Cidade' => 'Franco da Rocha',
    'Idade' => 'Incríveis 43 aninhos'
]
  ];

//Procurar na tabela de um banco de dados usando o id e o termo de procura
  change($tabelaclientes [1]['Cidade']);

?>