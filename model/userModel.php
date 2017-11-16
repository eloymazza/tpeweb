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

   function getUSers(){
    $sentencia = $this->db->prepare( "select * from usuario");
    $sentencia->execute();
    return $sentencia-> fetchAll(PDO::FETCH_ASSOC);
   }

   function deleteUser($user_id){
      $sentencia = $this->db->prepare("delete from usuario where id_usuario=?");
      $sentencia->execute([$user_id]);
   }

   function changePermissions($user_id, $newRol){
      $sentencia = $this->db->prepare('UPDATE usuario SET admin = ? WHERE id_usuario = ?');
      $sentencia->execute([$newRol, $user_id]);
   }
 }
 
 ?>