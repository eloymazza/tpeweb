
<?php
class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'productos#GET'=> 'ProductosApiController#getProductos',
      'productos#DELETE'=> 'ProductosApiController#deleteProducto',
      'productos#POST'=> 'ProductosApiController#createProducto',
      'productos#PUT'=> 'ProductosApiController#editProducto',

      'categorias#GET'=> 'CategoriasApiController#getCategorias',
      'categorias#DELETE'=> 'CategoriasApiController#deleteCategoria',
      'categorias#POST'=> 'CategoriasApiController#createCategoria',
      'categorias#PUT'=> 'CategoriasApiController#editCategoria'

    ];
}
?>
