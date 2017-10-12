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
        $this->adminView->showAdminPanel($categories);
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
