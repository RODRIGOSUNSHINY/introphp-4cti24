<?php
/*estrutura de repetiçãp para trabalhar com array */
$mendes = array(
    "FIH KATATAU! ",
    "FIH DO MOHAMMED! ",
    "FIH DO DEVANIR! ");
FOREACH($mendes as $view){
    echo $view;
}
?>
<hr>
<?php
$meses = array(
    'CAMINHÃO' => 1,
    'CARRO' => 2,
    'MOTO' => 3,
    'AVIÃO' => 4,
);
foreach($meses as $chave => $valor){
    echo 'é um ' . $chave . ' é ' . $valor . '<br>';
}
?>