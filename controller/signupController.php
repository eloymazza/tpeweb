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


  public function register(){

    if(!$this->validaCaptcha()){
        $this->signupView->showSignup("Validar Captcha");
    }
    else{
      $email = $_POST['email'];
      $password = $_POST['password'];
      $user = $_POST['password'];

      if(!empty($email) && !empty($password)){
        $user = $this->userModel->getUser($email);
        if ($user){
          $this->signupView->showSignup("Error el usuario ya existe");
          return;
        }
        else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->userModel->saveUser($email, $hash);
            $user = $this->userModel->getUser($email);
            $loginController = new LoginController();
            $loginController->login($email, $user);
        }
      }
    }
  }
  /*
  public function validaCaptcha(){
        if(!isset($_POST['g-recaptcha-response'])){
              $this->goToEndPoint("signup");
        }
        $post_data = http_build_query(
            array(
                'secret' => '6LdC5DgUAAAAALSGN4Jj47MUp2C3nrsMfG0DIHgY',
                'response' => $_POST['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR']
                )
            );
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $post_data
              )
            );
        $context  = stream_context_create($opts);
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $result = json_decode($response);
        if (!$result->success)
          return false;
        else
          return true;
        }
        */
     }
?>
