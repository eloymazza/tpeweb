$(document).ready(function(){
  $("button").on("click",function(){

    $(this).next().toggleClass("hide");
    adminButtonActiveEffects(this);

  });

  function adminButtonActiveEffects(buttonActive){
      $("button").removeClass("active-button");
      $(buttonActive).addClass("active-button");
  }

  $("#update-product-select").on('change', function(e){
    let datos = $(this).find(":selected").data("item");
    $("#update-product-name").val(datos.nombre);
    $("#update-product-description").val(datos.descripcion);
    $("#update-product-price").val(datos.precio);
    $("#update-product-discount").val(datos.descuento);
    $("#update-product-category").val(datos.id_categoria);
  })
})
