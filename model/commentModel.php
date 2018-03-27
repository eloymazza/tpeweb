<?php

    class CommentModel extends Model
    {
        function getComments($id_product){
            $sentencia = $this->db->prepare("select * from comentario Where id_producto=?");
            $sentencia->execute([$id_product]);
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function getComment($id_comment){
            $sentencia = $this->db->prepare("select * from comentario Where id_comentario=?");
            $sentencia->execute([$id_comment]);
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }

        function deleteAllComments($id_product){
            $sentencia = $this->db->prepare('delete from comentario where id_producto=?');
            $sentencia->execute([$id_product]);
        }

        function deleteComment($id_comment){
            $sentencia = $this->db->prepare('delete from comentario where id_comentario=?');
            $sentencia->execute([$id_comment]);
        }

        function addComment($comment,$score,$id_product){
            $sentencia = $this->db->prepare('INSERT INTO comentario(comentario,puntaje,id_producto) VALUES(?,?,?)');
            $sentencia->execute([$comment,$score,$id_product]);
            $id=$this->db->lastInsertId();
            return $this->getComment($id);
        }
    }

?>
