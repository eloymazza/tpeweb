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

      'adminPanel' => 'AdminController#adminPanel',
      'addCategory' => "AdminController#addCategory",
      'modifyCategory' => "AdminController#updateCategory",
      'deleteCategory' => "AdminController#deleteCategory",
      'out' => "LoginController#destroy",

      'addProduct' => "AdminController#addProduct",
      'modifyProduct' => "AdminController#updateProduct",
      'deleteProduct' => "AdminController#deleteProduct"
    ];

}

?>
