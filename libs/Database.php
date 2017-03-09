<?php

class Database extends PDO
{
	public function __construct()
	{
		$opciones = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
		parent::__construct('mysql' . ':host=' . '127.0.0.1' . ';dbname=' . 'teedo' . ';charset=utf8', 'antora', 'teedo', $opciones);

	
	}
}