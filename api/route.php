<?php
  define('RESOURCE', 0);
  define('PARAMS', 1);
  //Verifico instalacion BBDD
  $configFile = "../dbconfig.php";
  if(!file_exists($configFile)){
    header("Content-Type: application/json");
    header("HTTP/1.1 " . 500 . " " . 'Internal Server Error');
    echo json_encode('Verifique la instalacion del sistema.');
    die;
  }else{
    include_once ('../dbconfig.php');
  }

  include_once 'config/Router.php';
  include_once '../model/model.php';
  include_once 'controller/ProductosApiController.php';
  include_once 'controller/CategoriasApiController.php';
  $router = new Router();
  //url, verb, controller, method
  $router->AddRoute("productos", "GET", "ProductosApiController", "getProductos");
  $router->AddRoute("productos/:id", "GET", "ProductosApiController", "getProducto");
  $router->AddRoute("productos/:id/descripcion", "GET", "ProductosApiController", "getDescripcion");
  $router->AddRoute("productos/:id", "PUT", "ProductosApiController", "editProducto");
  $router->AddRoute("productos", "POST", "ProductosApiController", "createProducto");
  $router->AddRoute("productos/:id", "DELETE", "ProductosApiController", "deleteProducto");

  $router->AddRoute("categorias", "GET", "CategoriasApiController", "getCategorias");
  $router->AddRoute("categorias/:id", "GET", "CategoriasApiController", "getCategoria");
  $router->AddRoute("categorias/:id", "PUT", "CategoriasApiController", "editCategoria");
  $router->AddRoute("categorias", "POST", "CategoriasApiController", "createCategoria");
  $router->AddRoute("categorias/:id", "DELETE", "CategoriasApiController", "deleteCategoria");

  $route = $_GET['resource'];
  $array = $router->Route($route);
  if(sizeof($array) == 0)
    echo "404";
  else
  {
    $controller = $array[0];
    $metodo = $array[1];
    $url_params = $array[2];
    echo (new $controller())->$metodo($url_params);
  }
?>
