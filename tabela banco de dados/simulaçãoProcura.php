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
  ]
  ];

/*O primeiro elemento é uma array enquanto o segundo é uma variavel
que vai receber o contador no caso ID*/
foreach ($tabelaclientes as $contador => $ID){
  echo "ID ".$contador."\nNome: ".$ID['Nome']."\n"."Cidade: ".$ID['Cidade']." \nIdade: ".$ID['Idade']."\n \n";
}