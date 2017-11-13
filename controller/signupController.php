<?php
include_once('view/signupView.php');
include_once('controller/controller.php');
include_once('model/signupModel.php');

class SignupController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->signupView = new SignupView();
        $this->signupModel = new SignupModel();
    }

    public function signupPanel(){
        $this->signupView->showSignup();
    }

  public function verifyUser()
  {
      $userName = $_POST['nombre'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      if(!empty($userName) && !empty($email) && !empty($password)){
        $user = $this->signupModel->getUser($userName);
        if((!empty($user)) && password_verify($password, $user[0]['password'])) {
            session_start();
            $_SESSION['userName'] = $userName;
            $_SESSION['LAST_ACTIVITY'] = time();
            $this->goToEndPoint("adminPanel");
        }
        else{
            $this->signupView->showSignup("Error, Usuario o Contraseña Incorrectos");
        }
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
