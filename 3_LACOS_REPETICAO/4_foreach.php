<?php
/*estrutura de repetiçãp para trabalhar com array */
$mendes = array(
    "XANDÃO É O CARA!",
    "XAN XAN",
    "BORA BGS!");
FOREACH($mendes as $view){
    echo $view;
}
?>
<hr>
<?php
$meses = array(
    'janeiro' => 1,
    'fevereiro' => 2,
    'março' => 3,
    'abril' => 4,
);
foreach($meses as $chave => $valor){
    echo 'o mês' . $chave . 'é' . $valor . '<br>';
}
?>