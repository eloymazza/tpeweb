<?php
include_once('view/adminView.php');
include_once('model/categoriesModel.php');
include_once('model/productModel.php');
include_once('model/userModel.php');


class AdminController extends Controller
{
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['email'])){
            $this->goToEndPoint("login");
            die();
        }
        parent::__construct();
        $userModel = new UserModel();
        $user = $userModel->getUser($_SESSION['email']);
        if(!$user["admin"]){
          $this->goToEndPoint("login");
          die();
        }
        $this->adminView = new AdminView();
        $this->categoriesModel = new CategoriesModel();
        $this->productModel = new ProductModel();
    }

    public function adminPanel(){

        $categories = $this->categoriesModel->getCategories();
        $products = $this->productModel->getProducts();
        $this->adminView->showAdminPanel($categories, $products);
    }

}
 ?>
