<?php

function uploadFileTemp($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10, $valor11, $valor12, $valor13, $valor14, $valor15, $valor16, $valor17, $valor18, $valor19, $valor20, $valor21, $numeroFilas)
{

    include "../../../model/conection.php";

    $string = "('$valor1[0]','$valor2[0]','$valor3[0]','$valor4[0]', '$valor5[0]','$valor6[0]','$valor7[0]','$valor8[0]','$valor9[0]','$valor10[0]','$valor11[0]','$valor12[0]','$valor13[0]','$valor14[0]','$valor15[0]','$valor16[0]','$valor17[0]','$valor18[0]','$valor19[0]','$valor20[0]','$valor21[0]')";

    for ($i = 1; $i < $numeroFilas - 1; $i++) {
        if ($valor1[$i] != '' && $valor2[$i] != '' && $valor3[$i] != '') {
            $string = $string . ",('$valor1[$i]','$valor2[$i]','$valor3[$i]','$valor4[$i]','$valor5[$i]','$valor6[$i]','$valor7[$i]','$valor8[$i]','$valor9[$i]','$valor10[$i]','$valor11[$i]','$valor12[$i]','$valor13[$i]','$valor14[$i]','$valor15[$i]','$valor16[$i]','$valor17[$i]','$valor18[$i]','$valor19[$i]','$valor20[0]','$valor21[0]')";
        }
    }

    $sqlUpload = "INSERT INTO `dbcontenidoredes`(`year`, `semana`, `mes`, `fecha`, `objetivo`, `status`, `herramienta`, `colaboracion`, `redsocial`, `topico`,`post`, `contenido`,  `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `responsable`)
VALUES $string";
    $result = mysqli_query($conection, $sqlUpload);


    return "temp=" . $result;
}

function uploadFile($mexico, $chile, $ecuador, $latam, $programa)
{

    include "../../../model/conection.php";
    if ($mexico == true) {

        $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Mexico' WHERE 1";
        $result = mysqli_query($conection, $sqlUpdatePais);

        $date=searchDate($programa,"Mexico");

        $sqlInsertmx = "INSERT INTO dbcontenidoredes". $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
        SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial` ,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
        $resultmx = mysqli_query($conection, $sqlInsertmx);
    }
    if ($chile == true) {
        

        $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Chile' WHERE 1";
        $result = mysqli_query($conection, $sqlUpdatePais);

        $date=searchDate($programa,"Chile");

        $sqlInsertch = "INSERT INTO dbcontenidoredes" . $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`, `topico`,`facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
        SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
        $resultch = mysqli_query($conection, $sqlInsertch);
    }
    if ($ecuador == true) {
        
        $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Ecuador' WHERE 1";
        $result = mysqli_query($conection, $sqlUpdatePais);

        $date=searchDate($programa,"Ecuador");

        $sqlInsertec = "INSERT INTO dbcontenidoredes" . $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
         SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
        $resultec = mysqli_query($conection, $sqlInsertec);
    }
    if ($latam == true) {
        
        $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Latam' WHERE 1";
        $result = mysqli_query($conection, $sqlUpdatePais);

        $date=searchDate($programa,"Latam");

        $sqlInsertltm = "INSERT INTO dbcontenidoredes" . $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
         SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial` ,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
        $resultltm = mysqli_query($conection, $sqlInsertltm);
    }
    $sqlTruncate = "TRUNCATE TABLE `dbcontenidoredes`";
    $resultsql = mysqli_query($conection, $sqlTruncate);

    return "mx=" . $datemx . " ch=" . $resultch . " ec=" . $resultec . " latam=" . $resultltm;
}

function searchDate($programa, $pais)
{
    include "../../../model/conection.php";
    $sqlSearch = "SELECT  * FROM `dbcontenidoredes".$programa."` WHERE `id`=(SELECT max(`id`) FROM `dbcontenidoredes".$programa."` WHERE `pais`='$pais')";
    $resultSearch = mysqli_query($conection, $sqlSearch);
    $result_rol = mysqli_num_rows($resultSearch);
    $date="";
    if ($result_rol > 0) {
        $rol = mysqli_fetch_array($resultSearch);
        $date = $rol['fecha'];
    }
    return $date;
}
