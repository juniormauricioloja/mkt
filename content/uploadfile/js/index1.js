$(document).ready(function(){
    
});

function upload(){
    let file=$("#uploadFile").prop('files')[0];
    var datosForm=new FormData;
    datosForm.append("file",file);

    $.ajax({
        type: "POST",
        contentType:false,
        processData:false,
        data:datosForm,
        url:"controller/uploadFileController.php",
        beforeSend:function(xhr){
            $("#ajaxBusy").show();
        },
        success:function(data){
            console.log(data);
            uploadfile();
        },
        error: function(e){
            $("ajaxBusy").hide();
            error_noti("Sistema No Disponible");
            console.log(e);
        }
    });
}

function uploadfile(){
    let programa = document.getElementById("programa").value;
    let mexico = "";
    let chile = "";
    let ecuador = "";
    let latam = "";
    if (document.getElementById('mexico').checked) { mexico = true; }
    if (document.getElementById('chile').checked) { chile = true; }
    if (document.getElementById('ecuador').checked) { ecuador = true; }
    if (document.getElementById('latam').checked) { latam = true; }
    

    var cadena = "aux=uploadFile&mx="+mexico+"&ch="+chile+"&ec="+ecuador+"&latam="+latam+"&programa="+programa;
    console.log(cadena);

    $.ajax({
        type: "POST",
        data:cadena,
        url:"controller/uploadFileController.php",
        beforeSend:function(xhr){
            $("#ajaxBusy").show();
        },
        success:function(data){
            if(data){
                success_noti("Archivo subido");
                //window.location.href="../../index.php";
                console.log(data)
            }else{
                error_noti("Error al cargar el archivo");
                console.log(data)
            }
           
            
            
        },
        error: function(e){
            $("ajaxBusy").hide();
            error_noti("Sistema No Disponible");
            console.log(e);
        }
    });
}