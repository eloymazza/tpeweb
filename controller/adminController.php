<?php
include_once('view/adminView.php');
include_once('model/categoriesModel.php');
include_once('model/productModel.php');


class AdminController extends Controller
{
    function __construct()
    {
        session_start();
        if(!isset($_SESSION['userName'])){
            $this->goToEndPoint("login");
            die();
        }
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

}
 ?>
