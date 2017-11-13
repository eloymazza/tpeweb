<?php

include_once('view/view.php');

class AdminView extends View
{
    function __construct() {
        parent::__construct();
    }
    function showAdminPanel($categories, $products){
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("products", $products);
        $this->smarty->display("admin_panel/adminPanel.tpl");
    }

}

?>
