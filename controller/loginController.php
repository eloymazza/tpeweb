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
          $this->login($email);
        }
        else{
            $this->loginView->showLogin("Error, Usuario o Contraseña Incorrectos");
        }
      }
  }

  public function login($email)
  {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['LAST_ACTIVITY'] = time();
    $this->goToEndPoint("index");
  }

  public function logout()
  {
    session_start();
    session_destroy();
    $this->goToEndPoint("index");
  }
}
 ?>
