<?php
include_once('../html/functions.php');
?>

<?php
$atletas = [
    1 => 15,
    2 => 17,
    3 => 18,
    4 => 19,
    5 => 20
];

foreach($atletas as $id => $idade){
    change("O ".$id." atleta tem a idade de: ".$idade."\n");
    
    if($idade != $atletas[1]){
        $soma+=$idade;
        change($soma."\n");
    }
    else{
        $soma=$atletas[$id];
        change($soma."\n");
    }
}

//Média
change($soma/$id);
?>