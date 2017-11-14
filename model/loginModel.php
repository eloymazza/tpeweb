<?php

include_once("model/model.php");

class LoginModel extends Model
{
  function getUser($email){
    $sentencia = $this->db->prepare( "select * from usuario where email = ?");
    $sentencia->execute([$email]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
