<?php

// trabalha com a localização e regiao do nosso codigo.

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

var_dump(date_default_timezone_get());

date_default_timezone_set("America/Sao_Paulo");

var_dump(strftime("%H"));
var_dump(date("H"));