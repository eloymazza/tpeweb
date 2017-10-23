<?php

    include_once("view/indexView.php");
    include_once("model/productModel.php");
    include_once('controller/SetupController.php');

    class IndexController extends Controller
    {

        function __construct(){
            parent::__construct();
            $this->view = new IndexView();
            $this->productsModel = new ProductModel();
            $this->categoriesModel = new CategoriesModel();
            $this->offersModel = new OffersModel();

        }

        public function index()
        {
          if($this->setup->setupOk()){
            session_start();
            $userName = isset($_SESSION["userName"]) ? $_SESSION["userName"] : " ";
            //Reformar para que pida user Type
            $this->view->index($userName);
          }
        }

        public function home()
        {
          $this->view->home();
        }

        public function setup(){
          $this->view->setup();
        }

        public function catalogue(){
            $categoryName = "Todos";
            $categories = $this->categoriesModel->getCategories();
            $products = $this->productsModel->getProducts();
            $this->view->catalogue($categories,$products,$categoryName);
        }


        public function offers(){
            $categoryName = "Todas";
            $categories = $this->categoriesModel->getCategories();
            $offers = $this->offersModel->getOffers();
            $this->view->offers($categories,$offers,$categoryName);
        }

        public function aboutUs(){
            $this->view->aboutUs();
        }
    }


?>
