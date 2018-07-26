$("document").ready(function(){
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

    if(datos.fotos){
        let table = document.createElement("table");
        table.classList.add("table", "table-update-product");
        for(let foto of datos.fotos){
          let itemLista = document.createElement("tr");
          //Imagen
          let celdaImagen = document.createElement("td");
          let imagen = document.createElement("img");
          imagen.src = foto.ruta;
          imagen.classList.add("img-update-product");
          celdaImagen.appendChild(imagen);
          //Icono eliminacion
          let celdaLink = document.createElement("td");
          let trash = document.createElement("img");
          trash.src = "imagenes/trash.png";
          let deleteLink = document.createElement("a");
          deleteLink.href = "deleteImage?id_imagen="+foto.id_imagen;
          deleteLink.appendChild(trash);
          celdaLink.appendChild(deleteLink);

          //agrego item a la lista
          itemLista.appendChild(celdaImagen);
          itemLista.appendChild(celdaLink);
          table.appendChild(itemLista);
        }
        let div = document.getElementById("update-productos-lista-imagenes");
        div.innerHTML = "";
        div.appendChild(table);
    }
  })
});
