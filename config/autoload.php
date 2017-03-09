<?php

  function autoload($class) {

    if (file_exists(LIBS_PATH . $class . ".php")) {
      require LIBS_PATH . $class . ".php";
    } else {
        exit ('El fichero ' . $class . '.php falta en la libreria');
    }

  }

  spl_autoload_register("autoload");


  ?>
