<?php
require_once('Api.php');
require_once('../model/productModel.php');



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
        return $this->json_response(false, 404);
  }

  
  public function createProduct($url_params = []) {
    $body = json_decode($this->raw_data);
    $name = $body->nombre;
    $description = $body->descripcion;
    $price = $body->precio;
    $category = $body->id_categoria;
    $discount = $body->descuento;
    $producto = $this->model->addProduct($name, $description,$price, $category, $discount);
    return $this->json_response($producto, 200);
  }

//Para que sirve?
  public function getDescription($url_params = [])
  {
    $id_producto = $url_params[":id"];
    $producto = $this->model->getProduct($id_producto);
    if($producto)
      return $this->json_response($producto["descripcion"], 200);
    else
      return $this->json_response(false, 404);
  }


  public function deleteProduct($url_params = [])
  {
      $id_producto = $url_params[":id"];
      $producto = $this->model->getProduct($id_producto);
      if($producto)
      {
        $this->model->deleteProduct($id_producto);
        return $this->json_response("Borrado exitoso.", 200);
      }
      else
        return $this->json_response(false, 404);
  }


  public function editProduct($url_params = []) {
      $body = json_decode($this->raw_data);
      $name = $body->nombre;
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
}
 ?>