<?php
$tabelaclientes = array(
  
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
  );
/*O primeiro elemento é uma array enquanto o segundo é uma variavel
que vai receber o contador no caso ID*/
function Imprimir (array $tabelinha){
    $iu=$tabelinha;
    //print_r($iu['teste']);
foreach ($iu as $contador => $ID){
    //print_r ($iu[$contador]);
    if(is_array($contador[$ID]) == true){
        Imprimir($iu[$contador]);
    }
    else{
  echo("ID ".$ID."\nNome: ".$contador[$ID]."\n"."Cidade: ".$contador[$ID]." \nIdade: ".$contador[$ID]."\n \n");
    }
}
}
Imprimir ($tabelaclientes);
?>