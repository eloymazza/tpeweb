<?php

include_once 'model/model.php';

class OffersModel extends Model 
{

    function getOffers(){
        $sentencia = $this->db->prepare( "select * from producto where descuento > 0");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getOffersByCategory($idCategoria){
        $sentencia = $this->db->prepare( "select * from producto where descuento > 0 AND id_categoria=?");
        $sentencia->execute([$idCategoria]);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
   
}

?>
