<?php

include_once('view/view.php');

class IndexView extends View
{
    function __construct() {
        parent::__construct();
    }

    function index($userName){
        $this->smarty->assign('userName',$userName);
        $this->smarty->display('index.tpl');
    }

    function home(){
        $this->smarty->display('nav_sections/home.tpl');
    }

    function catalogue($categories, $products, $categoryName){
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categoryName",$categoryName);
        $this->smarty->display('nav_sections/catalogue.tpl');
    }


    function offers($categories, $products, $categoryName){
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categoryName",$categoryName);
        $this->smarty->display('nav_sections/offers.tpl');
    }

    function aboutUs(){
        $this->smarty->display('nav_sections/aboutUs.tpl');
    }

    function setup(){
      $this->smarty->display('nav_sections/setupForm.tpl');
    }


}

?>
