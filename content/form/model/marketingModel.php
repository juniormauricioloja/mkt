<?php
function insertMkt($year, $semana, $mes, $dia, $programa, $objetivo, $herramienta, $colaboracion, $topico, $post, $contenido, 
$facebook, $instagram,$tiktok,$linkedin,$otros,$linkBlog,$linkRRSS,$linkWeb,$linkForm,$linkYoutube,$arte,$logo,$comentarios,$responsable,$mexico,$chile,$ecuador,$latam,$redsocial,$status)
{
    include "../../../model/conection.php";

    $sqlInsertx = "INSERT INTO `dbcontenidoredes`(`year`, `mes`, `semana`, `fecha`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`, `topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `status`, `responsable`) 
                    VALUES ('$year','$mes','$semana','$dia','$objetivo','$herramienta','$colaboracion','$post','$contenido','$redsocial','$topico','$facebook','$instagram','$tiktok','$linkedin','$otros','$linkBlog','$linkRRSS','$linkWeb','$linkForm','$linkYoutube','$arte','$logo','$comentarios','$status','$responsable')";
    $result = mysqli_query($conection, $sqlInsertx);

        if($mexico == 1){
            $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Mexico' WHERE 1";
            $result = mysqli_query($conection, $sqlUpdatePais);
            $date=searchDate($programa,"Mexico");

            $sqlInsert = "INSERT INTO dbcontenidoredes". $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
            SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial` ,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
            $result = mysqli_query($conection, $sqlInsert);
            if(!$result){
                return false;
            }
    }if($chile == 1){
        $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Chile' WHERE 1";
            $result = mysqli_query($conection, $sqlUpdatePais);
            $date=searchDate($programa,"Chile");

        $sqlInsert2 =  "INSERT INTO dbcontenidoredes". $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
        SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial` ,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
        $result = mysqli_query($conection, $sqlInsert2);
        if(!$result){
            return false;
        }
    }if($ecuador == 1){
        $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Ecuador' WHERE 1";
            $result = mysqli_query($conection, $sqlUpdatePais);
            $date=searchDate($programa,"Ecuador");

        $sqlInsert3 =  "INSERT INTO dbcontenidoredes". $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
        SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial` ,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
        $result = mysqli_query($conection, $sqlInsert3);
        if(!$result){
            return false;
        }
    }if($latam == 1){
        $sqlUpdatePais = "UPDATE `dbcontenidoredes` SET `pais`='Latam' WHERE 1";
            $result = mysqli_query($conection, $sqlUpdatePais);
            $date=searchDate($programa,"Latam");

        $sqlInsert =  "INSERT INTO dbcontenidoredes". $programa . "(`year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
        SELECT `year`, `mes`, `semana`, `fecha`, `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial` ,`topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable` FROM dbcontenidoredes WHERE `fecha`>'$date'";
        $result = mysqli_query($conection, $sqlInsert);
        if(!$result){
            return false;
        }
    }

    $sqlTruncate = "TRUNCATE TABLE `dbcontenidoredes`";
    $resultsql = mysqli_query($conection, $sqlTruncate);

    return $result;
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