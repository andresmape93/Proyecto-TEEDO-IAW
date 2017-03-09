<!DOCTYPE html >
<html >
<style type="text/css">
body{background-color:#FAAC58; }
#cont1{height:30px; margin-top: 0px; background-color:#FE642E; text-align: center;}
#encabezado{height:10px; margin-left: 25%; background-color:#FE642E; text-align: center;  }

</style>

  <head>
		  <meta charset="utf-8">
      <title> TEEDO </title>

  </head>

  <body>
  <div id="cont1">
<div id="encabezado" background="#0174DF">
<form method="post" action="<?php echo URL; ?>login/login">
       <table padding="50px" >
         <tr> <td width="250px"> Nombre: <input name="name" type="text" /></td>


           <td width="300px"> password: <input name="passwd" type="password" /></td>
          <td> <button type="submit"> login </button>
         <tr>

         </tr>
         <tr> </td> </tr>
       </table>
</form>
</div>
</html>
