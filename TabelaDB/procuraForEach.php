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
  'Nome' => 'Mariah',
  'Cidade' => 'Jundiaí',
  'Idade' => ''
]
  ];

/*O primeiro elemento é uma array enquanto o segundo é uma variavel
que vai receber o contador no caso ID*/
foreach ($tabelaclientes as $contador => $ID){
  change("ID ".$contador."\nNome: ".$ID['Nome']."\n"."Cidade: ".$ID['Cidade']." \nIdade: ".$ID['Idade']."\n \n");
}