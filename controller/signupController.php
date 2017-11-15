<?php
  include_once('view/signupView.php');
  include_once('controller/controller.php');
  include_once('model/userModel.php');
  
  class SignupController extends Controller
  {
      function __construct()
      {
          parent::__construct();
          $this->signupView = new SignupView();
          $this->userModel = new UserModel();
      }
  
      public function signupPanel(){
          $this->signupView->showSignup();
      }
  

    public function register()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
  
        if(!empty($email) && !empty($password)){
          $user = $this->userModel->getUser($email);
          if ($user){
            $this->signupView->showSignup("Error el usuario ya existe");
            return;
          }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->userModel->saveUser($email, $hash);
            $loginController = new LoginController();
            $loginController->login($email);
          }
  
        }
    }
  }
?>