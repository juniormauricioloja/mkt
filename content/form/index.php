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
    <script src="js/index8.js" type="text/javascript"></script>
</head>

<body>
    <div id='ajaxBusy'></div>
    <div class="wrapper">
        <main class="page-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

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

                                    <h4><b>Información</b> </h4>
                                    <div class="row">


                                        <div class="form-row d-flex justify-content-center">
                                            <div class="form-group text-center">
                                                <label>País</label>
                                                <div class="row ">
                                                    <div class="col">
                                                        <div class="form-check form-check-inline ">
                                                            <input class="form-check-input" type="checkbox" id="mexico">
                                                            <label class="form-check-label" for="inlineCheckbox1">México</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="chile">
                                                            <label class="form-check-label" for="inlineCheckbox2">Chile</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="ecuador">
                                                            <label class="form-check-label" for="inlineCheckbox3">Ecuador</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" id="latam">
                                                            <label class="form-check-label" for="inlineCheckbox4">Latam</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb-3">

                                        <div class="col-2">
                                                <label for="" class="form-control-label">Fecha</label>
                                                <input type="date" id="fecha" class="form-control from-control-lg">
                                            </div>
                                            
                                            <div class="col-2">
                                                <label for="" class="form-control-label">Semana</label>
                                                <select name="" id="semana" class="form-control from-control-lg">
                                                    <option value="">---Seleccione Semana---</option>
                                                    <?php
                                                    for ($i = 1; $i <= 52; $i++) {
                                                    ?>
                                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                    <?php

                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            
                                            <div class="col">
                                                <label for="" class="form-control-label">Programa</label>
                                                <select name="" id="programa" class="form-control from-control-lg">
                                                    <option value="">---Seleccione Programa---</option>
                                                    <option value="upper">Upper</option>
                                                    <option value="educa">Educa</option>
                                                    <option value="languages">Languages</option>
                                                    <option value="hey">Hey</option>
                                                    <option value="gled">GLED</option>
                                                    <option value="letstalk">Let's Talk</option>
                                                    <option value="enrollu">Enroll U</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--

                                        <label for="exampleFormControlTextarea1">País</label>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="checkboxMexico" value="Idiomas">
                                                    <label class="form-check-label" for="inlineCheckbox1">México</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Comentarios</label>
                                                    <textarea class="form-control" id="comentariosMexico" rows="3" disabled></textarea>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="checkboxChile" value="Idiomas">
                                                    <label class="form-check-label" for="inlineCheckbox1">Chile</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Comentarios</label>
                                                    <textarea class="form-control" id="comentariosChile" rows="3" disabled></textarea>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="checkboxEcuador" value="Idiomas">
                                                    <label class="form-check-label" for="inlineCheckbox1">Ecuador</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Comentarios</label>
                                                    <textarea class="form-control" id="comentariosEcuador" rows="3" disabled></textarea>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="checkboxLatam" value="Idiomas">
                                                    <label class="form-check-label" for="inlineCheckbox1">LATAM</label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Comentarios</label>
                                                    <textarea class="form-control" id="comentariosLatam" rows="3" disabled></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        -->



                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Objetivo:</label>
                                                <select name="" id="objetivo" class="form-control from-control-lg">
                                                    <option value="">---Seleccione Objetivo---</option>
                                                    <option value="Posicionamiento">Posicionamiento</option>
                                                    <option value="Captación Clientes">Captacion Clientes</option>
                                                    <option value="Fidelizar Clientes">Fidelizar Clientes</option>
                                                    <option value="Incrementar Ventas">Incrementar Ventas</option>
                                                </select>
                                            </div>

                                            <div class="col">
                                                <label for="" class="form-control-label">Herramientas:</label>
                                                <select name="" id="herramienta" class="form-control from-control-lg">
                                                    <option value="">---Seleccione Herramienta---</option>
                                                    <option value="Imagen">Imagen</option>
                                                    <option value="Video">Video</option>
                                                    <option value="Carrusel">Carrusel</option>
                                                    <option value="Blog">Blog</option>
                                                    <option value="Conexión Youtube">Conexión Youtube</option>
                                                    <option value="Help con opciones">Help con opciones</option>
                                                    <option value="Reel">Reel</option>
                                                </select>
                                            </div>

                                            <div class="col">
                                                <label for="" class="form-control-label">Colaboración:</label>
                                                <input id="colaboracion" type="text" class="form-control from-control-lg">
                                            </div>

                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Tópico:</label>
                                                <input id="topico" type="text" class="form-control from-control-lg">
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Copy Post:</label>
                                                <input id="post" type="text" class="form-control from-control-lg">
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="exampleFormControlTextarea1">Contenido</label>
                                                <textarea class="form-control" id="contenido" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <form>
                                            <hr>
                                            <label>Red Social</label>
                                            <div class="form mb-3">

                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Idiomas">
                                                        <label class="form-check-label" for="inlineCheckbox1">Facebook</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Hey">
                                                        <label class="form-check-label" for="inlineCheckbox2">Instagram</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Upper">
                                                        <label class="form-check-label" for="inlineCheckbox3">Tik Tok</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Lets_Talk">
                                                        <label class="form-check-label" for="inlineCheckbox4">LinkedIn</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Educa">
                                                        <label class="form-check-label" for="inlineCheckbox5">Otros</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                        </form>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Link Blog</label>
                                                <input type="text" id="linkBlog" class="form-control from-control-lg" placeholder="Ingrese el link...">
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-control-label">Link RRSS</label>
                                                <input type="text" id="linkRRSS" class="form-control from-control-lg" placeholder="Ingrese el link...">
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Link Web</label>
                                                <input type="text" id="linkWeb" class="form-control from-control-lg" placeholder="Ingrese el link...">
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-control-label">Link Formulario</label>
                                                <input type="text" id="linkForm" class="form-control from-control-lg" placeholder="Ingrese el link...">
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Link Videos Youtube</label>
                                                <input type="text" id="linkYoutube" class="form-control from-control-lg" placeholder="Ingrese el link...">
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Arte</label>
                                                <input type="text" id="arte" class="form-control from-control-lg" placeholder="Ingrese el link...">
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Logos</label>
                                                <input type="text" id="logos" class="form-control from-control-lg">
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="exampleFormControlTextarea1">Comentarios</label>
                                                <textarea class="form-control" id="comentarios" rows="2"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="exampleFormControlTextarea1">Responsable</label>
                                                <select name="" id="responsable" class="form-control from-control-lg">
                                                    <option value="">---Seleccione Responsable---</option>
                                                    <option value="Agencia de Diseño">Agencia de Diseño</option>
                                                    <option value="Marketing">Marketing Team</option>
                                                    <option value="Mexico">México</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Latam">Latam</option>
                                                </select>
                                            </div>

                                            <div class="col">
                                                <label for="" class="form-control-label">Status</label>
                                                <select name="" id="status" class="form-control from-control-lg">
                                                    <option value="">---Seleccione Status---</option>
                                                    <option value="EN PROCESO">EN PROCESO</option>
                                                    <option value="APROBADO">APROBADO</option>
                                                    <option value="EJECUTADO">EJECUTADO</option>
                                                    <option value="EVALUADO">EVALUADO</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="btn-toolbar mb-2 mb-md-0 justify-content-center">
                                            <button class="btn btn-primary" onclick="save();"><i class="bi bi-download pr-3"></i>Guardar</button>
                                        </div>


                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                        <a href="../../content/uploadfile/index.php" class="btn btn-md btn-outline-info mr-2" role="button">
                            <span data-feather="arrow-left"></span>
                            Subir Archivo
                        </a>

                    </div>
                </div>
            </div>
    </div>



    <!-- MODAL NOTES -->


    <div id="modalFormulario" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">


                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <!-- FORM TO ADD TASKS -->
                            <form id="formTask ">
                                <div class="form-group ">
                                    <h2>La Información ha sido guardada exitosamente!</h2>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-primary " onclick="cerrar();"> Cerrar</button>

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