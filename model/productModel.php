<?php


class ProductModel extends Model
{

    function getProducts(){
      $productosImagenes = [];
      $sentencia = $this->db->prepare( "select * from producto");
      $sentencia->execute();
      $productos = $sentencia-> fetchAll(PDO::FETCH_ASSOC);
      foreach ($productos as $producto) {
        $sentencia_imagenes = $this->db->prepare( "select * from imagen where id_producto=?");
        $sentencia_imagenes->execute([$producto['id_producto']]);
        $imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
        $producto['fotos'] = $imagenes;
        $productosImagenes[] = $producto;
      }
      return $productosImagenes;
    }

    function getProduct($idProduct){
      $sentencia = $this->db->prepare( "select * from producto where id_producto = ?");
      $sentencia->execute([$idProduct]);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
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

    function addProduct($name, $description,$price, $category, $discount, $rutasTemp){
      $sentencia = $this->db->prepare('INSERT INTO producto(nombre,descripcion,precio,id_categoria,descuento) VALUES(?,?,?,?,?)');
      $sentencia->execute([$name,$description, $price, $category, $discount]);
      $id_producto = $this->db->lastInsertId();
      $rutas = $this->subirImagenes($rutasTemp);
      $sentencia_imagenes = $this->db->prepare('INSERT INTO imagen(id_producto, ruta) VALUES(?, ?)');
      foreach($rutas as $ruta){
        $sentencia_imagenes->execute([$id_producto, $ruta]);
      }
    }


    function deleteProduct($idProduct){
      $sentencia = $this->db->prepare('delete from producto where id_producto=?');
      $sentencia->execute([$idProduct]);
    }

    function updateProduct($name,$description,$price, $category, $discount,$id_poducto, $rutasTemp){
      $sentencia = $this->db->prepare("UPDATE producto SET nombre='$name', descripcion='$description', precio='$price',descuento='$discount', id_categoria='$category' WHERE id_producto=?");
      $sentencia->execute([$poduct_id]);
      $rutas = $this->subirImagenes($rutasTemp);
      $sentencia_imagenes = $this->db->prepare('INSERT INTO imagen(id_producto, ruta) VALUES(?, ?)');
      foreach($rutas as $ruta){
        $sentencia_imagenes->execute([$id_producto, $ruta]);
      }
    }

    private function subirImagenes($imagenes){
      $rutas = [];
      foreach ($imagenes as $imagen) {
        $destino_final = 'imagenes/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $destino_final);
        $rutas[]=$destino_final;
      }
      return $rutas;
   }
}


?>
