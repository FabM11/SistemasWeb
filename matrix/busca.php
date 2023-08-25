<?php
include_once('../html/functions.php');
?>

<?php
$matrix = [
  //matrix posição 0:
  [1,2,9,4,5],
 //0 1 2 3 4

  //matrix posição 1:
  [10,20,30,40,50],
  //0  1  2  3  4

  //matrix posição 2:
  [100,200,300,400,500], 
  //0   1   2   3   4

  //matrix posição 3 array dos mil:
  [1000,2000,3000,4000,5000,
  //0    1    2    3    4 

  //matrix posição 3 array dos 5 mil:
  [5001,5002,5003,5004,5005,
  //0    1    2    3    4

  //matrix posição 3 e array dos 5 mil posição 5:
  [0,4,6]
 //0 1 2

 //fechando array dos 5 mil
  ]
 //fechando array dos mil
  ]

  // fechando a matrix
];

// for para achar tudo da matrix:
// não é <= porque a nossa matrix vai até a posição 3 contendo 4 posições, então é < 4
for($i=0; $i < 4; $i++){
    
  // for para achar nas arrays dentro da matrix
  for($n = 0; $n < 6; $n ++){

    //Quando o for chegar na matrix na posição 3 e chegar no array dentro dela na posição 4 faça:
    if ($i==3 && $n==5){

    change("\n......ultimo vetor...... \n");

    for( $c = 0; $c < 3; $c++ ){
        change("\n posição matrix ".$i." e posição dentro do vetor ".$n. " dentro do ultimo vetor na posição ".$c." e o conteudo e: \n".
        $matrix[3][5][$c]."\n");
    }

    }
    /* vai dar erro de undefined e um warning porque não é todas as arrays que tem algo na posição 5 então não é viavel usar assim
     e ele vai avisar "warning" que está convertendo uma array para uma string então está certo mas não é ideal*/
      change("\n posição matrix ".$i." e posição dentro do vetor ".$n." e o conteudo é: ". $matrix[$i][$n]. PHP_EOL);
  }
}
$matrix[3][5][2]=null;
echo "valor ".$matrix[3][5][0]."\n";
print_r($matrix);