<?php
require_once('Api.php');
require_once('../model/productModel.php');

/**
 *
 */
class ProductosApiController extends Api
{
  protected $model;
  function __construct()
  {
      parent::__construct();
      $this->model = new ProductModel();
  }

  public function getProductos($url_params = [])
  {
      $productos = $this->model->getProducts();
      return $this->json_response($productos, 200);
  }
  public function getProducto($url_params = [])
  {
      $id_producto = $url_params[":id"];
      $producto = $this->model->getProduct($id_producto);
      if($producto)
        return $this->json_response($producto, 200);
      else
        return $this->json_response(false, 404);
  }
  public function getDescripcion($url_params = [])
  {
    $id_producto = $url_params[":id"];
    $producto = $this->model->getProduct($id_producto);
    if($producto)
      return $this->json_response($producto["descripcion"], 200);
    else
      return $this->json_response(false, 404);
  }
  public function deleteProducto($url_params = [])
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
  public function createProducto($url_params = []) {
    $body = json_decode($this->raw_data);
    $name = $body->nombre;
    $description = $body->descripcion;
    $price = $body->precio;
    $category = $body->id_categoria;
    $discount = $body->descuento;
    $producto = $this->model->saveProduct($name, $description,$price, $category, $discount);
    return $this->json_response($producto, 200);
  }
  public function editProducto($url_params = []) {
    $body = json_decode($this->raw_data);
    $name = $body->nombre;
    $descripcion = $body->descripcion;
    $price = $body->precio;
    $discount = $body->descuento;
    $category = $body->id_categoria;
    $product_id = $url_params[":id"];
    $producto = $this->model->updateProduct($name, $description, $price, $discount, $category, $poduct_id);
    return $this->json_response($producto, 200);
  }
}
 ?>
