<?php

include_once("controller/adminController.php");
include_once("model/categoriesModel.php");
include_once("model/productModel.php");
include_once("view/categoryView.php");


class CategoryController extends Controller
{

    function __construct(){
        parent::__construct();
        $this->categoriesModel = new CategoriesModel();
        $this->productModel = new ProductModel();
        $this->view = new CategoryView();

    }

    public function addCategory(){
      $nombre = $_POST["nombre"];
      if (isset($nombre) && !empty($nombre)){
        $this->categoriesModel->addCategory($_POST["nombre"]);
        $this->goToEndPoint("adminPanel");
      }
      else {
        $categories = $this->categoriesModel->getCategories();
        $this->view->errorCrear("La categoria es requerida", $nombre, $categories);
      }
    }

    public function updateCategory(){
        $this->categoriesModel->updateCategory($_POST["nuevo-nombre"], $_POST["nombre-categoria"]);
        $this->goToEndPoint("adminPanel");
    }

    public function deleteCategory(){
        $idCategoria = $_POST['id_categoria'];
        $this->productModel->updateProductsCategory($idCategoria);
        $this->categoriesModel->deleteCategory($idCategoria);
        $this->goToEndPoint("adminPanel");
    }
}
?>
