<?php

include_once('view/view.php');

class ProductView extends View
{
    function __construct() {
        parent::__construct();
    }

    // Funciones para secciones de usuario

    function productsByCategory($products, $categoryName,$categories){
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categoryName", $categoryName);
        $this->smarty->assign("categories", $categories);
        $this->smarty->display('filteredProducts.tpl');
    }


    // Funciones para administracion de productos
    function errorCrear($error, $name,$description, $price, $category, $discount, $categories){
      $this->assignProductForm($name,$description, $price, $category, $discount);
      $this->smarty->assign('error', $error);
      $this->smarty->assign('showAddProduct', true);
      $this->smarty->assign('categories', $categories);
      $this->smarty->display('admin_panel/adminPanel.tpl');
    }


    function errorUpdate($error, $name,$description, $price, $category, $discount, $categories){
      $this->assignProductForm($name,$description, $price, $category, $discount);
      $this->smarty->assign('error', $error);
      $this->smarty->assign('showModifyProduct', true);
      $this->smarty->assign('categories', $categories);
      $this->smarty->display('admin_panel/adminPanel.tpl');
    }

    function assignProductForm($name = '',$description = '', $price = '', $idCategory = '', $discount = ''){
      $this->smarty->assign('nombre',$name);
      $this->smarty->assign('descripcion',$description);
      $this->smarty->assign('precio',$price);
      $this->smarty->assign('id_categoria',$idCategory);
      $this->smarty->assign('descuento',$discount);
    }

}

?>
