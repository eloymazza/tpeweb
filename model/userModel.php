<?php
 
 include_once("model/model.php");
 
 class UserModel extends Model
 {
   function getUser($email){
     $sentencia = $this->db->prepare( "select * from usuario where email= ?");
     $sentencia->execute([$email]);
     if ($sentencia->rowCount() > 0) {
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     } else {
        return false;
     }
   }
 
   function saveUser($email, $password){
     $sentencia = $this->db->prepare('INSERT INTO usuario(email, password) VALUES(? ,?)');
     $sentencia->execute([$email, $password]);
   }
 
 }
 
 ?>