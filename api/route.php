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
  include_once 'controller/productsApiController.php';
  include_once 'controller/categoriesApiController.php';
  include_once 'controller/commentsApiController.php';
  $router = new Router();
  //url, verb, controller, method
  $router->AddRoute("products", "GET", "ProductsApiController", "getProducts");
  $router->AddRoute("products/:id", "GET", "ProductsApiController", "getProduct");
  $router->AddRoute("products", "POST", "ProductsApiController", "createProduct");
  $router->AddRoute("products/:id", "PUT", "ProductsApiController", "editProduct");
  $router->AddRoute("products/:id", "DELETE", "ProductsApiController", "deleteProduct");
  $router->AddRoute("categories", "GET", "CategoriesApiController", "getCategories");
  $router->AddRoute("categories/:id", "GET", "CategoriesApiController", "getCategory");
  $router->AddRoute("categories/:id", "PUT", "CategoriesApiController", "editCategory");
  $router->AddRoute("categories", "POST", "CategoriesApiController", "createCategory");
  $router->AddRoute("categories/:id", "DELETE", "CategoriesApiController", "deleteCategory");
  $router->AddRoute("comments/:id", "GET", "CommentsApiController", "getComments");
  $router->AddRoute("comments/:id", "POST", "CommentsApiController", "createComment");
  $router->AddRoute("comments/all/:id", "DELETE", "CommentsApiController", "deleteAllComments");
  $router->AddRoute("comments/:id", "DELETE", "CommentsApiController", "deleteComment");
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
