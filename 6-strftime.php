<?php

// conseguimos formatar as nossas datas levando em conta o nosso padrao de localização

setlocale(LC_ALL, "pt_BR", "portuguese");

// podemos adicionar texto tmb como "HOJE É ...."
$data = "Hoje é %A ,%d de %B dde %Y";

var_dump(strftime($data, strtotime("today")));