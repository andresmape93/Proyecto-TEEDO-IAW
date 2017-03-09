<!DOCTYPE html >
<?php require '../../config/config.php' ?>
<?php require '../../libs/Session.php' ?>

<html>
<?php
	Session::init();
	Session::get('name');
	?>
<style type="text/css">
body{background-color:#FAAC58;}
#cont1{height:30px; margin-top: 0px; background-color:#FAAC58; text-align: center;}
#encabezado{height:20px; margin-left: 30%; margin-top: 40px; background-color:#FAAC58; text-align: center;  }
#tabla{height: auto; margin-top: -10px; }
#logotipo{margin-top: 10px; text-align: center; background-color:#FE642E; font-size: 15px; font-family: cursive; height: 50px;  }
#registro{margin-top: 80px; margin-left: 38%;}
#casillas{text-align: right;}
#nomb{text-align: right; margin-top: -35px; margin-left: 10%;}
#conectado{margin-left: 70%;margin-top: -40px;}
#global {
	height: 452px;
	width: 300px;
	border: 1px solid #ddd;
	background: #FE642E;
	
}
#mensajes {
	height: auto;
}
.texto {
	padding:10px;
	background:#FE642E;
}
#perfiles{margin-top: -460px; margin-right: 820px; }
</style>

<div id="logotipo">
	<h1> TEEDO </h1>
</div>
	<hr> </hr>
</div>

<div  id="cont1">
	<div id="encabezado">
		<div id="tabla">
		<table border=0 >
			<tr>
				<td>
  					<form method="post" action="<?php echo URL; ?>views/login/home.php" > <input type="submit" value="Inicio" ></form>
          </td>
          <td>
          <form method="post" action="<?php echo URL; ?>views/login/perfil.php" ><input type="submit" value="Mi Perfil"></form>
        </td>
        <td>
            <form method="post" action="<?php echo URL; ?>views/login/archivos.php" ><input type="submit" value="Mis Archivos" ></form>
          </td>
          <td>
            <form method="post" action="<?php echo URL; ?>login/logout" > <input type="submit" value="Cerrar Sesion"></form>
  				</td>
  				</tr>
  			</table>
  			</div>

 					<div id="conectado">
 					<b><p>Usuario Conectado:</b> <?php echo $_SESSION['name']; ?> </p>

 					</div>

 	</div>

</div>

</div>
</br>
<hr> </hr>
<div id="global">
  <div id="mensajes">
  </br>
    <b><div class="texto"><a href="<?php echo URL; ?>views/login/home.php">Inicio</a></div></b>
    
    <b><div class="texto">Archivos</div></b>
    <b><div class="texto">Cursos ESO</div></b>
    <ul>
    	<li> 1º ESO</li>
    	<li> 2º ESO</li>
    	<li> 3º ESO</li>
    	<li> 4º ESO</li>
	</ul>
    <b><div class="texto">Cursos Bachillerato</div></b>
    <ul>
    	<li>1º Cientifico</li>
    	<li>2º Cientifico</li>
    	<li>1º Letras</li>
    	<li>2º Letras</li>
	</ul>
    
  </div>

</div>
<div id="perfiles" style="float: right;">
	<font size=15><p>Hola <?php echo $_SESSION['name']; ?></p></font>
	
</div>

    </body>
    </html>