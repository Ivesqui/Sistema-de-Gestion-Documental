
function agregarArchivos(){
    var formData = new FormData(document.getElementById('frmArchivos')); 
    $.ajax({
    url:"../../procesos/gestor/guardarArchivos.php",
    type:"POST",
    datatype: "html",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function(respuesta){
      console.log(respuesta);
      respuesta = respuesta.trim();
      if (respuesta == 1){
        $('#tablaGestorArchivos').load("../gestor/tablaGestor.php");
        swal(":D", "Agregado con éxito!", "success"); 
      }else{
        swal(":(", "Fallo al agregar tipo archivo no permitido!", "error");
      }
    }
    });

}

function eliminarArchivos(idDocumento){
    swal({
        title: "Estás seguro de eliminar este archivo?",
        text: "Una vez Eliminado, no podrá recuperarse!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
        $.ajax({
          type:"POST",
          data:"idDocumentos="+ idDocumento,
          url:"../../procesos/gestor/eliminarArchivos.php",
          success: function(respuesta){
            console.log(respuesta);
            respuesta = respuesta.trim();

            if(respuesta==1){
              $('#tablaGestorArchivos').load("../gestor/tablaGestor.php");
              swal("Archivo eliminado con éxito!", {
              icon: "success",
              });
            }else{
              swal("Error al eliminar el archivo!", {
              icon: "error",
              });
            }         

          }

        });
    } 
});


}

function obtenerArchivoId(idDocumento){
  $.ajax({
    type:"POST",
    data:"idDocumentos="+ idDocumento,
    url:"../../procesos/gestor/obtenerArchivos.php",
    success:function(respuesta){
      $('#archivoObtenido').html(respuesta);

    }
  });
}

