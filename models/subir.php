<?php

require '../config/config.php';
require '../controllers/upload.php';
$archivo = $_FILES['nombre_archivo'];
$destino = '../Imagenes';
$upload = new upload($_FILES['nombre_archivo'],$destino); 

$upload->uploadFile();