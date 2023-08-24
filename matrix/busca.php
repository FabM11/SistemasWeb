<?php
$matrix = [[1,2,9,4,5],[10,20,30,40,50],[100,200,300,400,500],[1000,2000,3000,4000,5000,[5000]]];

for($i=0; $i < 4; $i++){
    // não é <= porque a nossa marix vai até o 3 contendo 4 posições, então é < 4
  for($n = 0; $n < 4; $n ++){
    if ($i==3 && $n==4){
    echo "......ultimo vetor...... \n";
    for($c=0; $c<4; $c++){

    }
    }
      echo "posição matrix ".$i." e posição dentro do vetor ".$n." e o conteudo é: ". $matriz[$i][$n]. PHP_EOL;
  }
}
$matrix[3][4][2]=null;
echo "valor ".$matrix[3][4][0]."\n";
print_r($matrix);