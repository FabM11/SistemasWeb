<?php
$tabelaclientes = 
  [
1 => [
  'Nome' => 'Fabrício',
  'Cidade' => 'Jundiaí',
  'Idade' => 17
  ],
  
'teste' => [
  'Nome' => 'Davi',
  'Cidade' => 'Jundiaí',
  'Idade' => 17
  ], 
3 => [
  'Nome' => 'Mariah',
  'Cidade' => 'Jundiaí',
  'Idade' => 19
]
  ];
/*O primeiro elemento é uma array enquanto o segundo é uma variavel
que vai receber o contador no caso ID*/
function Imprimir (array $tabelinha){
    $iu=$tabelinha;
    print_r($iu);
foreach ($iu as $contador => $ID){
    if(is_array($iu[$contador]) == true){
        Imprimir($iu[$contador]);
    }
    else{
  echo("ID ".$iu[$contador]."\nNome: ".$iu[$contador][$ID]."\n"."Cidade: ".$iu[$contador][$ID]." \nIdade: ".$iu[$contador][$ID]."\n \n");
    }
}
}
Imprimir ($tabelaclientes);
?>