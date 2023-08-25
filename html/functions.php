<?php
//imprimir no h1
function HtmlH1 ($H1){
    echo "<h1>".$H1."</h1>";
}
?>

<?php
//imprimir no p
function imprimir($p){
    echo "<p>".$p."</p>";
}
?>

<?php
//colocar br em cada \n
function change($string){
    echo(nl2br($string));
}
?>

<?php
//colocar o arquivo de teste
function Path($arquivo){
    include_once('../'.$arquivo);
}
?>