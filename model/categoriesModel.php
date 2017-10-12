<?php

include_once 'model/model.php';

class CategoriesModel extends Model
{
    function getCategories(){
        $sentencia = $this->db->prepare( "select * from categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function addCategory($categoryName){
        $sentencia = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
        $sentencia->execute([$categoryName]);
    }

    function updateCategory($newName, $categoryName){
        $sentencia = $this->db->prepare('UPDATE categoria SET nombre = ? WHERE nombre = ?');
        $sentencia->execute([$newName, $categoryName]);
    }

    function deleteCategory($idCategory){
      $sentencia = $this->db->prepare('delete from categoria where id_categoria=?');
      $sentencia->execute([$idCategory]);
    }
}


?>
