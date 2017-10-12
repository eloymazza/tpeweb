<?php
include_once('view/view.php');
class SetupView extends View
{
  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('titulo', 'MVC Tareas');
  }
  function setupForm(){
    $this->smarty->display('setupForm.tpl');
  }
}
?>
