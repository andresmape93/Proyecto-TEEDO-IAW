<?php
class conectar{
  public static function conexion(){

    $db = new PDO("mysql:host=localhost;dbname=teedo","antora", "teedo");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }


}

?>
