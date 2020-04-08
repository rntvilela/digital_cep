<?php 

require_once "vendor/autoload.php";

use renato\digital_cep\Search;

$busca = new Search;

$resultado = $busca->get_adress('01001000');

print_r($resultado);
?>