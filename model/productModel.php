<?php


class ProductModel extends Model
{

    function getProducts(){
      $sentencia = $this->db->prepare( "select * from producto");
      $sentencia->execute();
      $productos = $sentencia-> fetchAll(PDO::FETCH_ASSOC);
      return $this->fillProductsWithImages($productos);
    }

    function getProduct($idProduct){
      $sentencia = $this->db->prepare( "select * from producto where id_producto = ?");
      $sentencia->execute([$idProduct]);
      $producto = $sentencia->fetch(PDO::FETCH_ASSOC);
      return $this->fillSingleProductWithImages($producto);
    }

    function getProductsByCategory($categoryID){
        $sentencia = $this->db->prepare( "select * from producto where id_categoria=?");
        $sentencia->execute([$categoryID]);
        $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $this->fillProductsWithImages($productos);
    }

    function updateProductsCategory($categoryID){
      $sentencia = $this->db->prepare( "UPDATE producto SET id_categoria=? WHERE id_producto = ? ");
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
      $sentencia = $this->db->prepare('select * from imagen where id_producto=?');
      $sentencia->execute([$idProduct]);
      $imagenesProducto = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      foreach ($imagenesProducto as $imagen) {
        unlink($imagen['ruta']);
      }
      $sentencia = $this->db->prepare("delete from imagen where id_producto=?");
      $sentencia->execute([$idProduct]);
      $sentencia = $this->db->prepare("delete from producto where id_producto=?");
      $sentencia->execute([$idProduct]);
    }

    function updateProduct($name,$description,$price, $discount, $category, $id_producto, $rutasTemp){
      $sentencia = $this->db->prepare("UPDATE producto SET nombre= ?, descripcion= ?, precio= ? ,descuento= ?, id_categoria= ? WHERE id_producto=?");
      $sentencia->execute([$name,$description,$price,$discount,$category,$id_producto]);

      $rutas = $this->subirImagenes($rutasTemp);
      $sentencia_imagenes = $this->db->prepare('INSERT INTO imagen(id_producto, ruta) VALUES(?, ?)');
      foreach($rutas as $ruta){
        $sentencia_imagenes->execute([$id_producto, $ruta]);
      }

    }
    private function subirImagenes($imagenes){
      $rutas = [];
      foreach ($imagenes as $imagen) {
        if(isset($imagen) && !empty($imagen)){
          $destino_final = 'imagenes/uploaded/' . uniqid() . '.jpg';
          move_uploaded_file($imagen, $destino_final);
          $rutas[]=$destino_final;
        }
      }
      return $rutas;
   }

   function deleteImagen($idImagen) {
      $sentencia = $this->db->prepare("select * from imagen where id_imagen=?");
      $sentencia->execute([$idImagen]);
      $imagen = $sentencia->fetch(PDO::FETCH_ASSOC);
      unlink($imagen['ruta']);
      $sentencia = $this->db->prepare("delete from imagen where id_imagen=?");
      $sentencia->execute([$idImagen]);
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
