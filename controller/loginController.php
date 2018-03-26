<?php
include_once('view/LoginView.php');
include_once('controller/controller.php');
include_once('model/loginModel.php');

class LoginController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loginView = new LoginView();
        $this->loginModel = new LoginModel();
    }

    public function loginPanel(){
        $this->loginView->showLogin();
    }

    public function verifyUser()
    {
        $email = $_POST['email']; 
        $password = $_POST['password'];
        if(!empty($email) && !empty($password)){
            $user = $this->loginModel->getUser($email);
        if((!empty($user)) && password_verify($password, $user[0]['password'])) {
            $this->login($email,$user);
        }
        else{
            $this->loginView->showLogin("Error, Usuario o Contraseña Incorrectos");
        }
      }
  }

    public function login($email,$user)
    {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['LAST_ACTIVITY'] = time();
        if($user[0]['admin']=="1"){
           $this->goToEndPoint("adminPanel");
        }
        else{
            $this->goToEndPoint("index");
        }
        
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this->goToEndPoint("index");
    }
}
 ?>
