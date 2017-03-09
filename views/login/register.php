<html>
<style type="text/css">
body{background-color:#FAAC58; }
#cont1{height:30px; margin-top: 0px; background-color:#FE642E; text-align: center;}
#encabezado{height:10px; margin-left: 25%; background-color:#FE642E; text-align: center;  }
#logotipo{margin-top: 90px; text-align: center; background-color:#FAAC58; font-size: 50px; font-family: cursive; height: 60px;  }
#introduccion{margin-top:150px; height: 30px; border: 1px; border-color:#1C1C1C;background-color:#FE642E; }
#registro{margin-top: 80px; margin-left: 38%;}
#casillas{text-align: right;}

    /*<?php   require '../../config/config.php' ?>*/


</style>
  <head>
		  <meta charset="utf-8">
      <title> registro </title>

  </head>

  <body>
  <div id="cont1">

<div id="logotipo">
<h1> TEEDO </h1>
</div>
<div id="introduccion">

<p> TEEDO es una red social para estudiantes, que no solo vale para contactar con tus compañeros, tambien vale para compartir apuntes </p>

</div>
<div id="registro">
  <form  action="<?php echo URL; ?>login/register_action" method="post">
  <table >
    <tr>
      <td colspan="2"> <b>Registrate en TEEDO</b> </td>
    </tr>
    <tr>
    <td id="casillas"> Nombre: </td> <td> <input name="regname" type="text"/> </td>
    </tr>

    <tr>
    <td id="casillas"> E-mail: </td> <td> <input name="regemail" type="text" /> </td>
    </tr>
    <tr>
    <td id="casillas"> Contraseña: </td> <td > <input name="regpasswd" type="password" /> </td>
    </tr>
    <tr>

     <td align="center" colspan="2">    <button type="submit"> Registro </button> <button type="reset"> Borrar </button> </td>


    </tr>
  </table>

</form>
</div>


    </body>
</html>
