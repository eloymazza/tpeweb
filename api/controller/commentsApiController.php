<?php
require_once('Api.php');
require_once('../model/commentModel.php');
require_once('../model/productModel.php');


class CommentsApiController extends Api
{
    protected $model;
    function __construct()
    {
        parent::__construct();
        $this->model = new CommentModel();
        $this->productModel = new ProductModel();
    }

    public function addComment(){

        

    }


    public function getComments($url_params){
        $product_id = $url_params[":id"];
        $comments = $this->model->getComments($product_id);
        if($this->productExist($product_id)){
            if($comments){  
                return $this->json_response($comments, 200);
            }
            else{
                return $this->json_response("El producto no tiene comentarios", 404);
            }
        }
        return $this->json_response("No se pueden mostrar comentarios ya que el producto no existe", 400);
    }

    
    public function deleteAllComments($url_params){
        $product_id = $url_params[":id"];
        if($this->model->getComments($product_id)){
            $this->model->deleteAllComments($product_id);
            return $this->json_response("Comentarios Borrados Existosamente", 200);
        }
        else{
            return $this->json_response("Comentarios no encontrados", 404);
        }
    }

    //Mejorar
    public function deleteComment($url_params){
        $comment_id = $url_params[":id"];
        $this->model->deleteComment($comment_id);
        return $this->json_response("Comentario Borrados Existosamente", 200);
    }
    
    public function productExist($product_id){

        $product = $this->productModel->getProduct($product_id);
        return $product;
    }
}

?>