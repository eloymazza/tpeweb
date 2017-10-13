<?php
include_once('controller/controller.php');
include_once('model/SetupModel.php');
include_once('view/SetupView.php');


class SetupController extends Controller
{
  protected $configFile = "dbconfig.php";

  function __construct()
  {
    $this->view = new SetupView();
    $this->model = new SetupModel();
  }

  function showSetup(){
    if($this->setupOk()){
      echo 'El sistema ya esta instalado.';
      die;
    }
    $this->view->setupForm();
  }

  function setupOk(){
    return file_exists($this->configFile);
  }

  function runSetup(){
    if (isset($_POST['host']) && $_POST['host'] != '' &&
        isset($_POST['database']) && $_POST['database'] != '' &&
        isset($_POST['username']) && $_POST['username'] != '' &&
        isset($_POST['password'])){
      // Ejecuto el script
      $this->model->runSetupScript($_POST['host'], $_POST['database'], $_POST['username'], $_POST['password']);
      // si no hay error creo el archivo de config.
      $file = fopen($this->configFile, 'w');
      if(!$file){
        echo 'No se permite escribir en el directorio de instalacion';
      }
      fwrite($file, "
      <?php

define('DB_HOST', '".$_POST['host']."');
define('DB_DATABASE', '".$_POST['database']."');
define('DB_USERNAME', '".$_POST['username']."');
define('DB_PASSWORD', '".$_POST['password']."');
      ");
      fclose($file);
      echo 'Instación completa.';
      $this->goToEndPoint("index");
    }
    else{
      echo 'Debe completar todos los campos del formulario.';
    }
  }
}
