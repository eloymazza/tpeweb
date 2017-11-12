<?php

    include_once("view/indexView.php");
    include_once("view/productView.php");
    include_once("controller/controller.php");
    include_once("model/productModel.php");
    include_once("model/categoriesModel.php");

    class ProductController extends Controller 
    {

        function __construct(){
            parent::__construct();
            $this->productModel = new ProductModel();
            $this->categoriesModel = new CategoriesModel();
            $this->view = new ProductView();
        
        }   

        public function getProductsByCategory($categoryInfo){
            $categories = $this->categoriesModel->getCategories();
            $products = $this->productModel->getProductsByCategory($categoryInfo[0]);
            $this->view->productsByCategory($products, $categoryInfo[1],$categories);
        }

        public function getAllProducts($categoryInfo){
            $categories = $this->categoriesModel->getCategories();
            $products = $this->productModel->getProducts();
            $this->view->productsByCategory($products, $categoryInfo[1],$categories);
        }

        public function addProduct(){
            $name = $_POST["nombre"];
            if(!$this->nameInUse($name)){
                $description = $_POST["descripcion"];
                $price = $_POST["precio"];
                $discount = $_POST["descuento"];
                $category = $_POST["categoria"];
                $this->productModel->addProduct($name,$description, $price,$discount, $category);
                $this->goToEndPoint("adminPanel");
            }
            else{
                echo "Error, el nombre del producto ya existe";
            }
          }
      
          public function deleteProduct(){
            $idProduct = $_POST['id_producto'];
            $this->productModel->deleteProduct($idProduct);
            $this->goToEndPoint("adminPanel");
          }
      
          public function updateProduct(){
            $productID = $_POST["id_producto"];
            $name = $_POST["nombre"];
            if(!$this->nameInUse($name)){
                $description = $_POST["descripcion"];
                $price = $_POST["precio"];
                $category = $_POST["categoria"];
                $discount = $_POST["descuento"];
                $this->productModel->updateProduct($name,$description, $price, $category, $discount,$productID);
                $this->goToEndPoint("adminPanel");
            }
            else{
                echo "El nombre del producto ya esta en uso";
            }
          }

          public function nameInUse($productName){
            $category = $this->productModel->getProductByName($productName);
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