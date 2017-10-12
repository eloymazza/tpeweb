<?php

class Controller
{
    protected $view;
    protected $model;
    protected $baseURL;

    function __construct(){
      $this->setup = new SetupController();
      $indexView = new IndexView();
      if(!$this->setup->setupOk()){
        $indexView->setup();
        die;
      }else{
        include_once 'dbconfig.php';
      }
    }

    public function goToEndPoint($endpoint = ""){
        header('Location: http://'.$_SERVER['SERVER_NAME']. dirname($_SERVER['PHP_SELF']).'/'.$endpoint);
    }
}

?>
