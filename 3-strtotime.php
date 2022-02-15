<?php

// informamos string que corresponde a datas em ingles e tenta converter em timestamp

// $texto = "now"; // data atual
// $texto = "+20 days"; // daqui a 20 dias
// $texto = "+36 month"; // daqui a 36 meses
// $texto = "last sunday"; // ultimo domingo
$texto = "next month"; // proximo mes

var_dump(strtotime($texto));

var_dump(date("d/m/Y H:i", strtotime($texto)));