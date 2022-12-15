<?php

function uploadFileTemp($year, $semana, $mes, $fecha, $objetivo, $status, $herramienta, $colaboracion, $redsocial, $topico, $post, $contenido, $linkblog, $linkrrss, $linkweb, $linkform, $youtube, $arte, $logo, $comentarios,  $responsable, $numeroFilas)
{

    include "../../../model/conection.php";

    $string = "('$year[0]','$semana[0]','$mes[0]','$fecha[0]', '$objetivo[0]','$status[0]','$herramienta[0]','$colaboracion[0]','$redsocial[0]','$topico[0]','$post[0]','$contenido[0]','$linkblog[0]','$linkrrss[0]','$linkweb[0]','$linkform[0]','$youtube[0]','$arte[0]','$logo[0]','$comentarios[0]','$responsable[0]')";

    for ($i = 1; $i < $numeroFilas - 1; $i++) {
        if ($year[$i] != '' && $semana[$i] != '' && $mes[$i] != '') {
            $string = $string . ",('$year[$i]','$semana[$i]','$mes[$i]','$fecha[$i]', '$objetivo[$i]','$status[$i]','$herramienta[$i]','$colaboracion[$i]','$redsocial[$i]','$topico[$i]','$post[$i]','$contenido[$i]','$linkblog[$i]','$linkrrss[$i]','$linkweb[$i]','$linkform[$i]','$youtube[$i]','$arte[$i]','$logo[$i]','$comentarios[$i]','$responsable[$i]')";
        }
    }

    $sqlUpload = "INSERT INTO `dbcontenidoredes`(`year`, `semana`, `mes`, `fecha`, `objetivo`, `status`, `herramienta`, `colaboracion`, `redsocial`, `topico`,`post`, `contenido`,  `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `responsable`)
    VALUES $string";
    $result = mysqli_query($conection, $sqlUpload);


    return "result=" . $string;
}

function uploadFile($mexico, $chile, $ecuador, $latam, $programa)
{

    include "../../../model/conection.php";
    $resultmx = '';
    $resultch = '';
    $resultec = '';
    $resultltm = '';
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

    return "mx=" . $resultmx . " ch=" . $resultch . " ec=" . $resultec . " latam=" . $resultltm;
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
