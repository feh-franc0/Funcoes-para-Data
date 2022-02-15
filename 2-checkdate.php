<?php

// valida se uma data é valida no padrao gregoriano(nosso calendario atual),ou seja, se passarmos um determinado numero ele vai validar se é um dia valido,,um mes valido, se é uma ano valido.Se a data esta correta . RETORNA BOOL

// muito util para validação
$dataNascimento = "29/02/1975";

$dataArray = explode("/",$dataNascimento);

$dia = (int)$dataArray[0];
$mes = (int)$dataArray[1];
$ano = (int)$dataArray[2];

var_dump(checkdate($mes,$dia,$ano)); //valida se a data realmente existiu