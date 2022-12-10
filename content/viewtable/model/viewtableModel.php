<?php
function consultarFlujo($programa)
{
    include "../../../model/conection.php";
    $sqlBuscar = "SELECT * FROM ".$programa;
    $result = mysqli_query($conection, $sqlBuscar);
    return $result;
}