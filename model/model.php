<?php
class Model
{
  protected $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host='.DB_HOST.';'
    .'dbname='.DB_DATABASE.';charset=utf8'
    , DB_USERNAME, DB_PASSWORD);
  }
}
?>
