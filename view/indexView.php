<?php

include_once('view/view.php');

class IndexView extends View
{
    function __construct() {
        parent::__construct();
    }

    function index(){
        $this->smarty->display('index.tpl');
    }

    function home(){
        $this->smarty->display('home.tpl');
    }

    function catalogue($categories, $products, $categoryName){
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categoryName",$categoryName);
        $this->smarty->display('catalogue.tpl');
    }


    function offers($categories, $products, $categoryName){
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categoryName",$categoryName);
        $this->smarty->display('offers.tpl');
    }

    function aboutUs(){
        $this->smarty->display('aboutUs.tpl');
    }

    function setup(){
      $this->smarty->display('setupForm.tpl');
    }


}

?>
