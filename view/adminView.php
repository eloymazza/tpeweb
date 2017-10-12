<?php

include_once('view/view.php');

class AdminView extends View
{
    function __construct() {
        parent::__construct();
    }
    function showAdminPanel($categories){
        $this->smarty->assign("categories", $categories);
        $this->smarty->display("adminPanel.tpl");
    }


}

?>
