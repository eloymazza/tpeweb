<?php

include_once("controller/adminController.php");
include_once("model/categoriesModel.php");
include_once("model/productModel.php");

class CategoryController extends Controller 
{

    function __construct(){
        parent::__construct();
        $this->categoriesModel = new CategoriesModel();
        $this->productModel = new ProductModel();
    }   

    public function addCategory(){
        $this->categoriesModel->addCategory($_POST["nombre"]);
        $this->goToEndPoint("adminPanel");
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
