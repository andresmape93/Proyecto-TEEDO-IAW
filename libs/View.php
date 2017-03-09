<?php

	class View
	{
		public function render($filename)
		{

			require VIEWS_PATH . 'plantillas/encabezado.php';
			require VIEWS_PATH . $filename . '.php';
			#require VIEWS_PATH . 'plantillas/piedepagina.php';
		}
	}