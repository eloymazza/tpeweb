<?php

class CategoriesModel extends Model
{
    function getCategories(){
        $sentencia = $this->db->prepare( "select * from categoria");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCategory($idCategory){
        $sentencia = $this->db->prepare( "select * from categoria where id_categoria = ?");
        $sentencia->execute([$idCategory]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function getCategoryByName($name){
        $sentencia = $this->db->prepare("select * from categoria where nombre = ?");
        $sentencia->execute([$name]);
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function addCategory($categoryName){
        $sentencia = $this->db->prepare('INSERT INTO categoria(nombre) VALUES(?)');
        $sentencia->execute([$categoryName]);
        $id = $this->db->lastInsertId();
        return $this->getCategory($id);
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
