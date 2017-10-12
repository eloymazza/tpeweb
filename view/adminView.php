<?php

include_once('view/view.php');

class AdminView extends View
{
    function __construct() {
        parent::__construct();
    }
    function showAdminPanel(){
        $this->smarty->display("adminPanel.tpl");
    }

    
}

?>