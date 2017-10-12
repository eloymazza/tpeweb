<?php
include_once('controller/Controller.php');
include_once('view/adminView.php');


class AdminController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->adminView = new AdminView();
    }
  
    public function adminPanel(){
        $this->adminView->showAdminPanel();
    }
  

  /*
  public function destroy()
  {
    session_start();
    session_destroy();
    header('Location: '.LOGIN);
  }
  */
}
 ?>
