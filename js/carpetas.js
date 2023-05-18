function agregarCarpetas() {
    var carpeta= $('#nombreCarpeta').val();
    if (carpeta = ""){
      swal("Debes agregar una Carpeta");
      return false;
    }else{
      $.ajax({
        type:"POST",
        data:"carpeta=" + carpeta,
        url:"../paginas/procesos/carpetas/agregarCarpeta.php",
        success:function(respuesta){
              respuesta = respuesta.trim();
              if (respuesta == 1) {
                $('#nombreCarpeta').val("");
                swal(":D", "Agregado con éxito", "success");
              }else{
                swal(":(", "Falló al Agregar", "error");
              }
          }
      });
    }
}