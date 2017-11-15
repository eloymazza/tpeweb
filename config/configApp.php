<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'IndexController#index',
      'index' => 'IndexController#index',
      'home'=> 'IndexController#home',
      'catalogue'=> 'IndexController#catalogue',
      'offers'=> 'IndexController#offers',
      'aboutUs'=> 'IndexController#aboutUs',

      'allProducts' => 'ProductController#getAllProducts',
      'categoryFilter' => 'ProductController#getProductsByCategory',

      'allOffers' => 'OffersController#getAllOffers',
      'offersFilter' => 'OffersController#getOffersByCategory',

      'login' => 'LoginController#loginPanel',
      'verifyUser' => 'LoginController#verifyUser',
      'logout' => 'LoginController#logout',
      
      'register' => 'SignupController#register',
      'signup' => 'SignupController#signupPanel',

      'adminPanel' => 'AdminController#adminPanel',

      'addCategory' => "categoryController#addCategory",
      'modifyCategory' => "categoryController#updateCategory",
      'deleteCategory' => "categoryController#deleteCategory",

      'addProduct' => "productController#addProduct",
      'modifyProduct' => "productController#updateProduct",
      'deleteProduct' => "productController#deleteProduct",

      'deleteImage' => "productController#deleteImage"
    ];

}

?>
