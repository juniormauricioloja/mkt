<?php
include "../model/marketingModel.php";
$aux = $_POST["aux"];

if ($aux == "save") {

$mexico = $_POST["mexico"];
$chile = $_POST["chile"];
$ecuador = $_POST["ecuador"];
$latam = $_POST["latam"];

$year = $_POST["year"];
$semana = $_POST["semana"];
$mes = $_POST["mes"];
$dia = $_POST["dia"];

$programa = $_POST["programa"];
$objetivo = $_POST["objetivo"];
$herramienta = $_POST["herramienta"];
$colaboracion = $_POST["colaboracion"];
$topico = $_POST["topico"];
$post = $_POST["post"];
$contenido = $_POST["contenido"];
$redes = $_POST["redes"];

$facebook = $_POST["facebook"];
$instagram = $_POST["instagram"];
$tiktok = $_POST["tiktok"];
$linkedin = $_POST["linkedin"];
$otros = $_POST["otros"];
$linkBlog = $_POST["linkBlog"];
$linkRRSS = $_POST["linkRRSS"];
$linkWeb = $_POST["linkWeb"];
$linkForm = $_POST["linkForm"];
$linkYoutube = $_POST["linkYoutube"];
$arte = $_POST["arte"];
$logo=$_POST["logos"];
$comentarios = $_POST["comentarios"];
$responsable = $_POST["responsable"];
$status = $_POST["status"];

  $result = insertMkt($year, $semana, $mes, $dia, $programa, $objetivo, $herramienta, $colaboracion, $topico, $post, $contenido, 
  $facebook, $instagram,$tiktok,$linkedin,$otros,$linkBlog,$linkRRSS,$linkWeb,$linkForm,$linkYoutube,$arte,$logo,$comentarios,$responsable,
  $mexico,$chile,$ecuador,$latam,$redes,$status);

  echo $result;

}