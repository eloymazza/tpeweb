<?php
 
 require_once("view/view.php");
 
 class SignupView extends View
 {
 
   function __construct(){
     parent::__construct();
   }
 
   function showSignup($error = ""){
     $this->smarty->assign("error",$error);
     $this->smarty->display('templates/signup.tpl');
   }
 }
 ?>