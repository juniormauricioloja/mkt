$(document).ready(function () {
    /*
    document.getElementById('checkboxMexico').onchange = function () {
        document.getElementById('comentariosMexico').disabled = !this.checked;
    };

    document.getElementById('checkboxChile').onchange = function () {
        document.getElementById('comentariosChile').disabled = !this.checked;
    };

    document.getElementById('checkboxEcuador').onchange = function () {
        document.getElementById('comentariosEcuador').disabled = !this.checked;
    };

    document.getElementById('checkboxLatam').onchange = function () {
        document.getElementById('comentariosLatam').disabled = !this.checked;
    };
    */

});

const save = () => {

    let mexico = false;
    let chile = false;
    let ecuador = false;
    let latam = false;

    if (document.getElementById('mexico').checked){mexico = 1};
    if (document.getElementById('chile').checked){chile = 1};
    if (document.getElementById('ecuador').checked){ecuador = 1};
    if (document.getElementById('latam').checked){latam = 1};


    let semana=document.getElementById("semana").value;

    let dia=document.getElementById("fecha").value;

    let programa=document.getElementById("programa").value;
    let objetivo=document.getElementById("objetivo").value;
    let herramienta=document.getElementById("herramienta").value;
    let colaboracion=document.getElementById("colaboracion").value;
    let topico=document.getElementById("topico").value;
    let post=document.getElementById("post").value;
    let contenido=document.getElementById("contenido").value;
    // redes

    let facebook = 0;
    let instagram = 0;
    let tiktok = 0;
    let linkedin = 0;
    let otros = 0;

    let redes="";


    if (document.getElementById('inlineCheckbox1').checked) { redes= "Facebook";facebook = 1};
    
    if (document.getElementById('inlineCheckbox2').checked && redes!="") { redes= redes+"/Instagram";instagram = 1}
    else if(document.getElementById('inlineCheckbox2').checked&&redes==""){ redes= redes+"Instagram";instagram = 1};    
    if (document.getElementById('inlineCheckbox3').checked && redes!="") { redes=redes+"/Tiktok"; tiktok = 1}
    else if(document.getElementById('inlineCheckbox3').checked&&redes==""){ redes= redes+"Tiktok";tiktok = 1}; 
    if (document.getElementById('inlineCheckbox4').checked && redes!="") { redes= redes+"/Linkedin";linkedin = 1}
    else if(document.getElementById('inlineCheckbox4').checked&&redes==""){ redes= redes+"Linkedin";linkedin = 1}; 
    if (document.getElementById('inlineCheckbox5').checked && redes!="") { redes= redes+"/Otros";otros = 1}
    else if(document.getElementById('inlineCheckbox5').checked&&redes==""){ redes= redes+"Otros";otros = 1}; 

    //
    let linkBlog=document.getElementById("linkBlog").value;
    let linkRRSS=document.getElementById("linkRRSS").value;
    let linkWeb=document.getElementById("linkWeb").value;
    let linkForm=document.getElementById("linkForm").value;
    let linkYoutube=document.getElementById("linkYoutube").value;
    let arte=document.getElementById("arte").value;
    let logo=document.getElementById("logos").value;
    let comentarios=document.getElementById("comentarios").value;
    let responsable = document.getElementById("responsable").value;
    let status = document.getElementById("status").value;

    console.log(responsable);


    var cadena = "aux=save&semana=" + semana + "&dia="+dia+"&programa=" + programa + "&objetivo="+ objetivo
    +"&herramienta="+herramienta+"&colaboracion="+colaboracion+"&topico="+topico + "&post=" + post + "&contenido=" + contenido +
    "&facebook=" + facebook +"&instagram=" + instagram +"&tiktok=" + tiktok +"&linkedin=" + linkedin +"&otros=" + otros +"&redes="+redes+
    "&linkBlog=" + linkBlog +"&linkRRSS=" + linkRRSS +"&linkWeb=" + linkWeb +"&linkForm=" + linkForm + "&linkYoutube=" + linkYoutube +"&arte=" 
    + arte+"&logos="+logo+"&comentarios=" + comentarios+"&responsable="+responsable+"&mexico="+mexico+"&chile="+chile+"&ecuador="+ecuador+"&latam="+latam+"&status="+status;
    $.ajax({
        type: "POST",
        url: "controller/marketingController.php",
        data: cadena,
        beforeSend: function (xhr) {
            $("#ajaxBusy").show();
        },
        success: function (r) {
            console.log(r)
            if (r == true) {
                $('#modalFormulario').modal({backdrop: 'static', keyboard: false});
                $("#modalFormulario").modal("show");
            } else if (r == false) {
                error_noti("Error al crear el registro/Campos vacíos");
            } else {
                error_noti("Error");
            }
        },
        error: function (e) {
            $("ajaxBusy").hide();
            error_noti("Sistema No Disponible");
        }
    });
}



const cerrar = () => {
    window.location.href="../../index.php";
}