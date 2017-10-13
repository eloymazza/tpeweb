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
      $userName = $_POST['nombre'];
      $password = $_POST['password'];

      if(!empty($userName) && !empty($password)){
        $user = $this->loginModel->getUser($userName);
        if((!empty($user)) && password_verify($password, $user[0]['password'])) {
            session_start();
            $_SESSION['USER'] = $userName;
            $_SESSION['LAST_ACTIVITY'] = time();
            $this->goToEndPoint("adminPanel");
        }
        else{
            $this->loginView->showLogin("Error, Usuario o Contraseña Incorrectos");
        }
      }
  }

  public function destroy()
  {
    session_start();
    session_destroy();
    $this->goToEndPoint();
  }
}
 ?>
