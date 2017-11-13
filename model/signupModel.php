<?php

include_once("model/model.php");

class SignupModel extends Model
{
  function getUser($userName){
    $sentencia = $this->db->prepare( "select * from usuario where nombre= ? limit 1");
    $sentencia->execute([$userName]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
