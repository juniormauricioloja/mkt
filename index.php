<?php
session_start();
$so = php_uname();
$windows = stripos($so, "Windows");

#if ($windows !== false) {
#  $path_so = "C:/xampp/htdocs/gled/cabecera.php";
#} else {
#   $path_so = "/var/www/html/gled/cabecera.php";
#}
?>
<!doctype html>
<html lang="es">

<html>

<head>
    <meta charset="UTF-8">

    <!-------------- Eliminar Cache---------------------------------->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <!--------------------------------------------------------------->

    <title>Contenido Redes Gled</title>

    <?php require_once "scripts.php"; ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link href="/static/stylesheets/Chart.min.css" rel="stylesheet">
    <link href="/static/stylesheets/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <script src="js/index3.js" type="text/javascript"></script>
</head>

<body>
    <div id='ajaxBusy'></div>
    <div class="wrapper">
        <main class="page-content">
            <div class=" justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                <div class="form-new-lead">
                    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <img src="/gled/img/gled.png" height="200">
                    </div>
                    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h2 class="h4">CONTENIDO REDES GLED</h2>

                    </div>
                    <div class="row">
                        <div class="col-16">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row">

                                        <div class="btn-toolbar mb-2 mb-md-0 justify-content-center">

                                            <button class="btn btn-info" onclick="insertForm();"><i class="bi bi-card-text"></i> <br>Ingresar Formulario</button>
                                            <button class="btn btn-info" onclick="uploadFile();"><i class="bi bi-upload"></i> <br>Subir Archivo .xlsx</button>
                                            

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>

    <!--end page main-->
    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--start switcher-->
    </div>
    <!--end wrapper-->
</body>

</html>