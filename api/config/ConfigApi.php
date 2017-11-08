<?php
class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'products#GET'=> 'ProductsApiController#getProducts',
      'productos#DELETE'=> 'ProductsApiController#deleteProduct',
      'productos#POST'=> 'ProductsApiController#createProduct',
      'productos#PUT'=> 'ProductsApiController#editProduct',
      'categorias#GET'=> 'CategoriesApiController#getCategories',
      'categorias#DELETE'=> 'CategoriesApiController#deleteCategory',
      'categorias#POST'=> 'CategoriesApiController#createCategory',
      'categorias#PUT'=> 'CategoriesApiController#editCategory'
    ];
}
?>