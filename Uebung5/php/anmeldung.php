<?php

$vorname = $_GET["vorname"];

$nachname = $_GET["name"];

$email = $_GET["email"];

$matrikelnr = $_GET["matrikelnr"];

$handy = $_GET["handy"];

$studiengang = $_GET["studiengang"];

if($_GET["messe"] == "CeBIT"){
    $cebit = fopen("../txt/cebit.txt", "a+");
    fwrite($cebit, $vorname." ".$nachname.", ".$matrikelnr.", ".$email.", ".$handy.", ".$studiengang);
    fclose($cebit);
}

if($_GET["messe"] == "ConhIT"){
    $conhit = fopen("../txt/conhit.txt", "a+");
    fwrite($conhit, $vorname." ".$nachname.", ".$matrikelnr.", ".$email.", ".$handy.", ".$studiengang);
    fclose($conhit);
}

if($_GET["messe"] == "WebTechCon"){
    $webtechcon = fopen("../txt/webtechcon.txt", "a+");
    fwrite($webtechcon, $vorname." ".$nachname.", ".$matrikelnr.", ".$email.", ".$handy.", ".$studiengang);
    fclose($webtechcon);
}

?>