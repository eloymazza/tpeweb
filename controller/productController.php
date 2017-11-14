<?php

    include_once("view/indexView.php");
    include_once("view/productView.php");
    include_once("controller/controller.php");
    include_once("model/productModel.php");
    include_once("model/categoriesModel.php");

    class ProductController extends Controller
    {

        function __construct(){
            parent::__construct();
            $this->productModel = new ProductModel();
            $this->categoriesModel = new CategoriesModel();
            $this->view = new ProductView();

        }

        public function getProductsByCategory($categoryInfo){
            $categories = $this->categoriesModel->getCategories();
            $products = $this->productModel->getProductsByCategory($categoryInfo[0]);
            $this->view->productsByCategory($products, $categoryInfo[1],$categories);
        }

        public function getAllProducts($categoryInfo){
            $categories = $this->categoriesModel->getCategories();
            $products = $this->productModel->getProducts();
            $this->view->productsByCategory($products, $categoryInfo[1],$categories);
        }

        private function sonJPG($imagenesTipos){
            foreach ($imagenesTipos as $tipo) {
              if($tipo != 'image/jpeg') {
                return false;
              }
            }
            return true;
        }

        public function addProduct(){

          $name = $_POST["nombre"];
          $description = $_POST["descripcion"];
          $price = $_POST["precio"];
          $idCategory = $_POST["categoria"];
          $discount = $_POST["descuento"];
          if($_FILES['imagenes']['error'][0] == UPLOAD_ERR_NO_FILE)
          {
            $categories = $this->categoriesModel->getCategories();
            $this->view->errorCrear("El archivo es requerido", $name, $description, $price, $idCategory, $discount, $categories);
          }else{
            $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
            if($this->sonJPG($_FILES['imagenes']['type'])) {
              $this->productModel->addProduct($name, $description, $price, $idCategory, $discount, $rutaTempImagenes);
              $this->goToEndPoint("adminPanel");
            }else{
              $categories = $this->categoriesModel->getCategories();
              $this->view->errorCrear("Las imagenes tienen que ser JPG.", $name, $description, $price, $idCategory, $discount, $categories);
            }
          }
        }
        public function deleteProduct(){
          if (isset($_POST['id_producto']) && !empty($_POST['id_producto'])) {
            $this->productModel->deleteProduct($_POST['id_producto']);
          }
          $this->goToEndPoint("adminPanel");
        }

        public function updateProduct(){
          $name = $_POST["nombre"];
          $description = $_POST["descripcion"];
          $price = $_POST["precio"];
          $idCategory = $_POST["categoria"];
          $discount = $_POST["descuento"];
          $id_producto = $_POST["id_producto"];

          $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];
          if( $_FILES['imagenes']['error'][0] == UPLOAD_ERR_NO_FILE // No hubo archivos
            || ($_FILES['imagenes']['error'][0] !== UPLOAD_ERR_NO_FILE
            && $this->sonJPG($_FILES['imagenes']['type'])) //Hubo archivos y son JPG
          ) {
            $this->productModel->updateProduct($name,$description, $price, $discount, $idCategory, $id_producto, $rutaTempImagenes);
            $this->goToEndPoint("adminPanel");
          }else{
            $categories = $this->categoriesModel->getCategories();
            $this->view->errorUpdate("Las imagenes tienen que ser JPG.", $name, $description, $price, $idCategory, $discount, $categories);
          }

      }

        function eliminarImagen() {
          $this->productModel->deleteImagen($_POST['id_imagen']);
        }

    /*
    function adminProductoImagenes() {
      if (isset($_GET['id_producto']) && !empty($_GET['id_producto'])) {
        $this->productView->adminProductoImagenes($this->productoModel->getImagenesProducto($_GET['id_producto']));
      }
    }

*/
  }


?>
