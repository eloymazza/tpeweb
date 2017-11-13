<?php

    class CommentModel extends Model
    {
        function getComments($id_product){
            $sentencia = $this->db->prepare("select * from comentario Where id_producto=?");
            $sentencia->execute([$id_product]);
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
    }

?>