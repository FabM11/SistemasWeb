<?php
if ($H1 != ''){
    echo HtmlH1($H1);
}

if($arquivo != ''){
    Path($arquivo);
}

if ($p != ''){
    echo imprimir($p);
}

echo "</body>";
echo "</html>";
?>