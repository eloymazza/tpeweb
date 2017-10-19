<?php
class SetupModel
{
  function runSetupScript($host, $dbname, $user, $pass){

    $mysql = new PDO("mysql:host=".$host.";dbname=", $user, $pass);
    $createDB = $mysql->prepare("CREATE DATABASE IF NOT EXISTS $dbname");
    $createDB->execute();
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $file = fopen("db_test.sql", "r") or die("Unable to open database.sql file!");
    $sql = fread($file,filesize("db_test.sql"));
    fclose($file);
    $db->exec($sql);
  }
}
