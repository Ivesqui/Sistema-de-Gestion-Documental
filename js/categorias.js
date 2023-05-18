function agregarCategorias(){}

function eliminarCategorias(idCategorias){

    idCategorias = parseInt(idCategorias);

    if(idCategorias < 1) {
       swal("No tienes id de Categoria!");
       return false;
    } else{
      swal({
        title: "Estás seguro de eliminar esta categoria?",
        text: "Una vez eliminada, no podrá recuperarse",
        icon: "warning",
        buttons: true,
        dangerMode: true,
 
      })
      .then((willDelete) => {
        if (willDelete) {
          
          
          $.ajax({
            type:"POST",
            data:"idCategoria="+idCategorias,
            url:"../../procesos/categorias/eliminarCategorias.php",
            success: function(respuesta){
              respuesta = respuesta.trim(); //es para quitarle los espacios a la respuesta solo por seguridad
              if (respuesta == 1)
              {

                $('#tablaCategorias').load("../categorias/tablaCategorias.php");
                swal("La categoría ha sido eliminada con éxito!", {
                  icon: "success",
               });


              }else{
                swal(":("," Fallo al eliminar, Necesita eliminar los archivos dentro de dicha categoría","error");

              }

            }
          });

        }

      });
    }
   
}

function obtenerDatosCategorias(idCategorias){
  $.ajax({
    type: "POST",
    data: "idCategoria="+idCategorias,
    dataType: "html",
    url: "../../procesos/categorias/obtenerCategorias.php",
    success:function(respuesta){
      console.log(respuesta);
      respuesta = jQuery.parseJSON(respuesta);
      $('#idCategoria').val(respuesta['idCategoria']);
      $('#categoriaU').val(respuesta['nombreCategorias']);
    }
    


  })
}

function actualizarCategorias(){
  if ($('#categoriaU').val() == ""){
    swal("No hay categorias!!");
    return false;
  }else{
    $.ajax({
      type:"POST",
      data:$('#frmActualizarCategoria').serialize(),
      url:"../../procesos/categorias/actualizarCategorias.php",
      success: function(respuesta){
        respuesta = respuesta.trim(); 

        if(respuesta == 1){
            $('#tablaCategorias').load("../categorias/tablaCategorias.php");
            swal(":D","Categoría Actualizada con éxito","success");
        }else{
            swal(":(","No se pudo actualizar categoría!","error");
        }
      
      }

    })
  }
}
