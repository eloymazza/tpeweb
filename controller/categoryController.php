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
        $categoryName = $_POST["nombre"];
        if(!$this->nameInUse($categoryName)){           
            $this->categoriesModel->addCategory($categoryName);
            $this->goToEndPoint("adminPanel");
        }
        else{
            echo "Nombre de Categoria en uso";
        }
    }

    public function updateCategory(){
        $newName = $_POST["nuevo-nombre"];
        if(!$this->nameInUse($newName)){
            $this->categoriesModel->updateCategory($newName, $_POST["nombre-categoria"]);
            $this->goToEndPoint("adminPanel");
        }
        else{
            echo "Nombre de Categoria en uso";
        }
    }

    public function deleteCategory(){
        $idCategoria = $_POST['id_categoria'];
        $this->productModel->updateProductsCategory($idCategoria);
        $this->categoriesModel->deleteCategory($idCategoria);
        $this->goToEndPoint("adminPanel");
    }

    public function nameInUse($categoryName){
        $category = $this->categoriesModel->getCategoryByName($categoryName);
        if($category == ''){
            return false;
        }
        else
        {
            return true;
        }
    }
}
?>
