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
        $this->userModel = new UserModel();
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

    function deleteUser(){
        if (isset($_POST['id_usuario']) && !empty($_POST['id_usuario'])) {
            $this->userModel->deleteUser($_POST['id_usuario']);
          }
          $this->goToEndPoint("adminPanel");
    }

    function modifyUserPermissions(){
        print_r($_POST);
        $user_id = $_POST['id_usuario'];
        if(isset($_POST['admin'])){
            $this->userModel->changePermissions($user_id, "1");
        }
        else{
            $this->userModel->changePermissions($user_id, "0");
        }
        $this->goToEndPoint("adminPanel");
    }

}

 ?>
