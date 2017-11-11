<?php
require_once('Api.php');
require_once('../model/categoriesModel.php');

    class CategoriesApiController extends Api
    {

        protected $model;
        function __construct()
        {
            parent::__construct();
            $this->model = new CategoriesModel();
        }


        public function getCategories($url_params = [])
        {
            $categorias = $this->model->getCategories();
            return $this->json_response($categorias, 200);
        }


        public function getCategory($url_params = [])
        {
            $id_categoria = $url_params[":id"];
            $categoria = $this->model->getCategory($id_categoria);
            if($categoria)
                return $this->json_response($categoria, 200);
            else
                return $this->json_response(false, 404);
        }


        public function deleteCategory($url_params = [])
        {
            $id_categoria = $url_params[":id"];
            $categoria = $this->model->getCategory($id_categoria);
            if($categoria)
            {
                $this->model->deleteCategory($id_categoria);
                return $this->json_response("Borrado exitoso.", 200);
            }
            else
                return $this->json_response(false, 404);
        }

        
        public function createCategory($url_params = []) {
            $body = json_decode($this->raw_data);
            $categoryName = $body->nombre;
            if(!$this->nameInUse($categoryName)){
                $categoria = $this->model->addCategory($categoryName);
                return $this->json_response($categoria, 200);
            }
            return $this->json_response("La cetegoria ya esta en uso", 400);
        }


        public function editCategory($url_params = []) {
            $body = json_decode($this->raw_data);
            $newName = $body->nombre;
            $idCategory = $url_params[":id"];
            if(!$this->nameInUse($newName)){
            $categoria = $this->model->updateCategory($newName, $idCategory);
            return $this->json_response($categoria, 200);
            }
            return $this->json_response("El nombre elegido ya existe", 400);
        }

        public function nameInUse($categoryName){
            $category = $this->model->getCategoryByName($categoryName);
            if($category == ''){
                return false;
            }
            else
            {
                return true;
            }
        }
    
    }
 ?> 