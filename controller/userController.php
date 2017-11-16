<?php
include_once('controller/controller.php');
include_once('model/userModel.php');
include_once('model/loginModel.php');

class UserController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loginModel = new LoginModel();
    }

    function getUserPermission(){
        $isAdmin = false;
        $isUser = false;
        session_start();
        if(isset($_SESSION['email'])){
            $isUser = true;
            $email = $_SESSION['email'];
            $user = $this->loginModel->getUser($email);
            if($user[0]['admin'] == "1"){
                $isAdmin = true;
            }
        }   
        header("Content-Type: application/json");
        return json_encode(array('admin'=> $isAdmin, 'user'=> $isUser));

    }
}

 ?>
