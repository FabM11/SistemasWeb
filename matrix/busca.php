<?php
$matrix = [[1,2,9,4,5], [10,20,30,40,50], [100,200,300,400,500], [1000,2000,3000,4000,5000, [5001,5002,5003,5004,5005,[0,4,6]]]];

// não é <= porque a nossa marix vai até o 3 contendo 4 posições, então é < 4
for($i=0; $i < 4; $i++){
    
  for($n = 0; $n < 6; $n ++){
    //Quando o for chegar no primeiro array na posição 3 e chegar no segundo array na posição 4 faça:
    if ($i==3 && $n==5){
    echo "\n......ultimo vetor...... \n";
    for( $c = 0; $c < 4; $c++ ){
        echo "\n posição matrix ".$i." e posição dentro do vetor ".$n. " dentro do ultimo vetor na posição ".$c." e o conteudo e: \n";
    }
    }
      echo "posição matrix ".$i." e posição dentro do vetor ".$n." e o conteudo é: ". $matriz[$i][$n]. PHP_EOL;
  }
}
$matrix[3][5][2]=null;
echo "valor ".$matrix[3][5][0]."\n";
print_r($matrix);