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

    public function createComment($url_params = []){
        $body = json_decode($this->raw_data);
        $comment = $body->comentario;
        $score = $body->puntaje;
        $product_id = $url_params[":id"];
        $commentResponse = $this->model->addComment($comment, $score, $product_id);
        return $this->json_response($commentResponse, 200);
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

    public function deleteComment($url_params){
        $comment_id = $url_params[":id"];
        $this->model->deleteComment($comment_id);
        return $this->json_response("Comentario Borrado Existosamente", 200);
    }
    
    public function productExist($product_id){
        $product = $this->productModel->getProduct($product_id);
        return $product;
    }


    public function validateCaptcha(){
        if(!isset($_POST['g-recaptcha-response'])){
            $this->goToEndPoint("signup");
        }
        $post_data = http_build_query(
            array(
                'secret' => '6LdC5DgUAAAAALSGN4Jj47MUp2C3nrsMfG0DIHgY',
                'response' => $_POST['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR']
                )
            );
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $post_data
              )
            );
        $context  = stream_context_create($opts);
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        $result = json_decode($response);
        if (!$result->success){
            return false;
        }
        else
        {
          return true;
        }
    }
    /*

    if(!$this->validaCaptcha()){
        $this->signupView->showSignup("Validar Captcha");
    }
        */
}

?>