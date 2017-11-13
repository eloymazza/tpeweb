<?php

include_once('view/view.php');

class CategoryView extends View
{
    function __construct() {
        parent::__construct();
    }


    // Funciones para administracion de productos

    function errorCrear($error, $name, $categories){
      $this->assignCategoryForm($name);
      $this->smarty->assign('error', $error);
      $this->smarty->assign('showAddCategory', true);
      $this->smarty->assign('categories', $categories);
      $this->smarty->display('admin_panel/adminPanel.tpl');
    }

    function assignCategoryForm($name = ''){
      $this->smarty->assign('nombre',$name);

    }

}

?>
