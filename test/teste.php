<?php
$titulo = 'teste';
require_once('../html/header.php');
?>

<?php
function Path($arquivo){
    include_once('../'.$arquivo);
}

$arquivo = 'Matrix/busca.php';


if($arquivo != ''){
    // transforma os \n em br
    Path($arquivo);

}
else{

}
?>

<?php
$p = '';
require_once('../html/footer.php')
?>