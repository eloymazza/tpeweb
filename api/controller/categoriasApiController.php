<?php
require_once('Api.php');
require_once('../model/categoriesModel.php');

/**
 *
 */
class CategoriasApiController extends Api
{
  protected $model;
  function __construct()
  {
      parent::__construct();
      $this->model = new CategoriesModel();
  }

  public function getCategorias($url_params = [])
  {
      $categorias = $this->model->getCategories();
      return $this->json_response($categorias, 200);
  }
  public function getCategoria($url_params = [])
  {
      $id_categoria = $url_params[":id"];
      $categoria = $this->model->getCategory($id_categoria);
      if($categoria)
        return $this->json_response($categoria, 200);
      else
        return $this->json_response(false, 404);
  }

  public function deleteCategoria($url_params = [])
  {
      $id_categoria = $url_params[":id"];
      $categoria = $this->model->getCategory($id_categoria);
      if($categoria)
      {
        $this->model->deleteCategory($id_categoria);
        return $this->json_response("Borrado exitoso.", 200);
      }
      else
        return $this->json_response(false, 404);
  }
  public function createCategoria($url_params = []) {
    $body = json_decode($this->raw_data);
    $categoryName = $body->nombre;
    $categoria = $this->model->saveCategory($categoryName);
    return $this->json_response($categoria, 200);
  }
  public function editCategoria($url_params = []) {
    $body = json_decode($this->raw_data);
    $newName = $body->nombre;
    $idCategory = $url_params[":id"];
    $categoria = $this->model->updateCategory($newName, $idCategory);
    return $this->json_response($categoria, 200);
  }
}
 ?>
