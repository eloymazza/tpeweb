<?php
class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'products#GET'=> 'ProductsApiController#getProducts',
      'products#DELETE'=> 'ProductsApiController#deleteProduct',
      'products#POST'=> 'ProductsApiController#createProduct',
      'products#PUT'=> 'ProductsApiController#editProduct',
      'categories#GET'=> 'CategoriesApiController#getCategories',
      'categories#DELETE'=> 'CategoriesApiController#deleteCategory',
      'categories#POST'=> 'CategoriesApiController#createCategory',
      'categories#PUT'=> 'CategoriesApiController#editCategory'
    ];
}
?>