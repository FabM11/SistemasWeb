<?php
include_once('../html/functions.php');
?>

<?php

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