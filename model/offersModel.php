<?php

include_once 'model/model.php';

class OffersModel extends Model
{

    function getOffers(){
        $sentencia = $this->db->prepare( "select * from producto where descuento > 0");
        $sentencia->execute();
        $productos = $sentencia-> fetchAll(PDO::FETCH_ASSOC);
        return $this->fillProductsWithImages($productos);
    }

    function getOffersByCategory($idCategoria){
        $sentencia = $this->db->prepare( "select * from producto where descuento > 0 AND id_categoria=?");
        $sentencia->execute([$idCategoria]);
        $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $this->fillProductsWithImages($productos);
    }

    function fillProductsWithImages($productos){
      $productosImagenes = [];
      foreach ($productos as $producto) {
        $productosImagenes[] = $this->fillSingleProductWithImages($producto);
      }
      return $productosImagenes;
    }

    function fillSingleProductWithImages($producto){
      $sentencia_imagenes = $this->db->prepare( "select * from imagen where id_producto=?");
      $sentencia_imagenes->execute([$producto['id_producto']]);
      $imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
      $producto['fotos'] = $imagenes;
      return $producto;
    }
}

?>
