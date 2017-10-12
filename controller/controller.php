<?php

class Controller
{
    protected $view;
    protected $model;
    protected $baseURL;

    function __construct(){
        
    }

    public function goToEndPoint($endpoint = ""){
        header('Location: http://'.$_SERVER['SERVER_NAME']. dirname($_SERVER['PHP_SELF']).'/'.$endpoint);
    }
}

?>