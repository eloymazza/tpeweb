<?php

    include_once("view/indexView.php");
    include_once("view/productView.php");
    include_once("view/offersView.php");
    include_once("model/categoriesModel.php");
    include_once("model/offersModel.php");

    class OffersController extends Controller 
    {

        function __construct(){
            parent::__construct();
            $this->offersModel = new OffersModel();
            $this->categoriesModel = new CategoriesModel();
            $this->offersView = new OffersView();
            
        }   

        public function getAllOffers($categoryInfo){
            $categoryName = $categoryInfo[1];
            $categories = $this->categoriesModel->getCategories();
            $offers = $this->offersModel->getOffers();
            $this->offersView->offersByCategory($offers, $categoryName,$categories);
        }
        
        public function getOffersByCategory($categoryInfo){
            $categoryId = $categoryInfo[0];
            $categoryName = $categoryInfo[1];
            $categories = $this->categoriesModel->getCategories();
            $offers = $this->offersModel->getOffersByCategory($categoryId);
            $this->offersView->offersByCategory($offers, $categoryName,$categories);
        }


    }


?>