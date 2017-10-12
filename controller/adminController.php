<?php
include_once('controller/controller.php');
include_once('view/adminView.php');
include_once('model/categoriesModel.php');
include_once('model/productModel.php');


class AdminController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->adminView = new AdminView();
        $this->categoriesModel = new CategoriesModel();
        $this->productModel = new ProductModel();
    }

    public function adminPanel(){
        $categories = $this->categoriesModel->getCategories();
        $products = $this->productModel->getProducts();
        $this->adminView->showAdminPanel($categories, $products);
    }

    public function addCategory(){
        $this->categoriesModel->addCategory($_POST["nombre"]);
        $this->adminPanel();
    }

    public function updateCategory(){
      $this->categoriesModel->updateCategory($_POST["nuevo-nombre"], $_POST["nombre-categoria"]);
      $this->adminPanel();
    }

    public function deleteCategory(){
      $idCategoria = $_POST['id_categoria'];
      $this->productModel->updateProductsCategory($idCategoria);
      $this->categoriesModel->deleteCategory($idCategoria);
      $this->adminPanel();
    }

    public function addProduct(){
      $name = $_POST["nombre"];
      $description = $_POST["descripcion"];
      $price = $_POST["precio"];
      $category = $_POST["categoria"];
      $discount = $_POST["descuento"];
      $this->productModel->addProduct($name,$description, $price, $category, $discount);
      $this->adminPanel();
    }

    public function deleteProduct(){
      $idProduct = $_POST['id_producto'];
      $this->productModel->deleteProduct($idProduct);
      $this->adminPanel();
    }

    public function updateProduct(){
      $productID = $_POST["id_producto"];
      $name = $_POST["nombre"];
      $description = $_POST["descripcion"];
      $price = $_POST["precio"];
      $category = $_POST["categoria"];
      $discount = $_POST["descuento"];
      $this->productModel->updateProduct($name,$description, $price, $category, $discount,$productID);
      $this->adminPanel();
    }

    public function goOut(){
      $this->goToEndPoint();
    }

  /*
  public function destroy()
  {
    session_start();
    session_destroy();
    header('Location: '.LOGIN);
  }
  */
}
 ?>
