<?php

class Controller
{
  function __construct()
  {
      Session::init();

    try
      {
          $this->db = new Database();
        } catch (PDOException $e) {
          die('Database connection could not be established.');
        }


        $this->view = new View();

  }

 public function loadModel($name)
 {
   $path = MODELS_PATH . strtolower($name) . '_model.php';

   if (file_exists($path)) {
     require MODELS_PATH . strtolower($name) . '_model.php';

     $modelName = $name.'_model';

     return new $modelName($this->db);


   }

 }
}
?>
