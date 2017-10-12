<?php

include_once 'model/model.php';

class ProductModel extends Model
{

    function getProducts(){
        $sentencia = $this->db->prepare( "select * from producto");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProductsByCategory($categoryID){
        $sentencia = $this->db->prepare( "select * from producto where id_categoria=?");
        $sentencia->execute([$categoryID]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function updateProductsCategory($categoryID){
      $sentencia = $this->db->prepare( "UPDATE producto SET id_categoria=0 WHERE id_categoria = ? ");
      $sentencia->execute([$categoryID]);
    }

    function addProduct($name, $description,$price, $category, $discount){
      $sentencia = $this->db->prepare('INSERT INTO producto(nombre,descripcion,precio,id_categoria,descuento) VALUES(?,?,?,?,?)');
      $sentencia->execute([$name,$description, $price, $category, $discount]);
    }

    function deleteProduct($idProduct){
      $sentencia = $this->db->prepare('delete from producto where id_producto=?');
      $sentencia->execute([$idProduct]);
    }

    function updateProduct($name,$description,$price, $category, $discount,$poduct_id){
      echo $name;
        $sentencia = $this->db->prepare("UPDATE producto SET nombre='$name', descripcion='$description', precio='$price',descuento='$discount', id_categoria='$category' WHERE id_producto=?");
      $sentencia->execute([$poduct_id]);
    }
}


?>
