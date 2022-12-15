<?php
session_start();

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

include "../model/uploadModel.php";

$aux = $_POST["aux"];

if($aux == "uploadFile"){
    $mexico = $_POST["mx"];
    $chile =  $_POST["ch"];
    $ecuador =  $_POST["ec"];
    $latam = $_POST["latam"];
    $programa = $_POST["programa"];
    $resultado = uploadFile($mexico,$chile,$ecuador,$latam,$programa);
    echo $resultado;
}
?>
