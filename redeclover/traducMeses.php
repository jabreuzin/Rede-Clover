<?php

//Fuso-Horário(São Paulo)
date_default_timezone_set('America/Sao_Paulo');

//Traduz os meses
if (date("F") === "January") {
    $mes = "JANEIRO";
} else if (date("F") === "February") {
    $mes = "FEVEREIRO";
} else if (date("F") === "March") {
    $mes = "MARÇO";
} else if (date("F") === "April") {
    $mes = "ABRIL";
} else if (date("F") === "May") {
    $mes = "MAIO";
} else if (date("F") === "June") {
    $mes = "JUNHO";
} else if (date("F") === "July") {
    $mes = "JULHO";
} else if (date("F") === "August") {
    $mes = "AGOSTO";
} else if (date("F") === "September") {
    $mes = "SETEMBRO";
} else if (date("F") === "October") {
    $mes = "OUTUBRO";
} else if (date("F") === "November") {
    $mes = "NOVEMBRO";
} else if (date("F") === "December") {
    $mes = "DEZEMBRO";
}

//Dia de hoje
$today = date("j");

?>