<?php

class upload
{
 #atributo para tener los archivos
 private $_fichero; 
 #atributo para la ruta donde sera subido el archivo
 private $_ruta;
 #Ahora vamos a empezar como parametro el dato $_FILE['campo'],$destino
 public function __construct($file,$destino)
 {   




    if(count($file) == 0){
        echo "debe indicar el archivo que desea subir";
    }    
    else{
        $this->_fichero = $file;
          if(!empty($destino)){
           $this->_ruta = $destino.'/'.$file['name'];      
          }
          else{
          $this->_ruta = $file['name'];   
          }
         //$return = $this->uploadFile();   
        } 
       //echo $return ;     
       }
 
 
    public function uploadFile()
    {
      if(move_uploaded_file($this->_fichero['tmp_name'],$this->_ruta)){
        //header('location: '. URL . 'views/login/home.php');
        echo "Correcto"; sleep(5);
        header('location: '. URL . 'views/login/perfil.php');

      }
      else{
        header('location: '. URL . 'views/login/home.php');
      }
    }

  }

