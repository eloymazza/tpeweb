<?php
require_once('Api.php');
require_once('../model/productModel.php');
require_once('commentsApiController.php');


class ProductsApiController extends Api
{
  protected $model;
  function __construct()
  {
      parent::__construct();
      $this->model = new ProductModel();
  }


  public function getProducts($url_params = [])
  {
      $productos = $this->model->getProducts();
      return $this->json_response($productos, 200);
  }


  public function getProduct($url_params = [])
  {
      $id_producto = $url_params[":id"];
      $producto = $this->model->getProduct($id_producto);
      if($producto)
        return $this->json_response($producto, 200);
      else
        return $this->json_response("El producto no existe", 404);
  }

  
  public function createProduct($url_params = []) {
    $body = json_decode($this->raw_data);
    $name = $body->nombre;
    if(!$this->nameInUse($name)){
      $description = $body->descripcion;
      $price = $body->precio;
      $category = $body->id_categoria;
      $discount = $body->descuento;
      $producto = $this->model->addProduct($name, $description,$price, $discount,$category);
      return $this->json_response($producto, 200);
    }
    else{
      return $this->json_response("El nombre de producto ya esta en uso", 400);
    }
  }

  public function deleteProduct($url_params = [])
  {
      $product_id = $url_params[":id"];
      $producto = $this->model->getProduct($product_id);
      if($producto)
      {
        $this->model->deleteProduct($product_id);
        $commentController = new CommentsApiController();
        print_r($commentController->deleteComments($product_id));
        return $this->json_response("Borrado exitoso", 200);
      }
      else
        return $this->json_response(false, 404);
  }


  public function editProduct($url_params = []) {
      $body = json_decode($this->raw_data);
      $name = $body->nombre;
      if(!$this->nameInUse($name)){
          $descripcion = $body->descripcion;
          $price = $body->precio;
          $discount = $body->descuento;
          $category = $body->id_categoria;
          $product_id = $url_params[":id"];
          $producto = $this->model->updateProduct($name, $descripcion, $price, $discount, $category, $product_id);
          if($producto){
            return $this->json_response("Producto Editado Exitosamente", 200);
          }
          else{
            return $this->json_response("Error, Producto No Encontrado", 404);
          }
      }
      else{
        return $this->json_response("Error, el nombre que intentas ponerle ya existe",400);
      }
  }

  public function nameInUse($productName){
    $product = $this->model->getProductByName($productName);
    if($product == ''){
        return false;
    }
    else
    {
        return true;
    }
  }

}
 ?>