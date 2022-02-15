<?php

// para fazer a validao/verificação e converter em formatos legiveis para o codigo

// passa uma string que ira virar um array associativo
var_dump(date_parse("2020-11-26 12:01:02.003 -10 day"));

$data = "26/11/2020";

// define um padrao de data que voce deseja
var_dump(date_parse_from_format("d/m/Y", $data));