<?php

class Login_Model
 {
 	#Conexión a la base de datos, usando la case DATABSASE, definida en database.php

 	      public function __construct(Database $db)
 	      {
 		       $this->db =$db;
 	       }

#Función LOGIN ####################################################################################################################################################

 	    public function login()
 	    {
        #Comprobar si el campo nombre o contraseña estan vacio.

          if (!isset($_POST['name']) OR empty($_POST['name'])){
 			        $_SESSION["feedback_negative"][] = FEEDBACK_USERNAME_FIELD_EMPTY;
 			          return false;
 		           }
 		      if (!isset($_POST['passwd']) OR empty($_POST['passwd'])){
 			        $_SESSION["feedback_negative"][] = FEEDBACK_PASSWORD_FIELD_EMPTY;
 			          return false;
 		           }

        #Sacar los datos de la BD, y contar las columnas.

        $datos = $this->db->prepare("SELECT name,email,password,tipo FROM usuarios,roles,perfiles WHERE (name = :name OR email = :name) AND usuarios.id=perfiles.idusuario AND perfiles.idrol=roles.id");
 		     $datos->execute(array(':name' =>$_POST['name']));



              $count = $datos->rowCount();

 		     if ($count != 1 ){
 			    $_SESSION["feedback_negative"][] = FEEDBACK_LOGIN_FAILED;
 			    return false;
 		     }

        #Obtiene los datos del array, que son los datos de los usuarios, y comprueba si el password es correcto.


 		$resultado = $datos->fetch();


 		if ($_POST['passwd'] == $resultado->password){
            #Iniciamos la sesion con los datos del usuario, para futuros usos.

 			Session::init();
 		//	Session::set('user_logged_in',true);
 			Session::set('name',$resultado->name);
 			Session::set('email',$resultado->email);
      Session::set('rol',$resultado->tipo);
        if ($resultado->tipo == 'admin'){


            return $return='admin';
                }
                elseif ($resultado->tipo == 'usuario') {

                return $return='usuario';
              } else {
                return true;
              }
    }

return false;

  }

#Fin funcion LOGIN
########################################################################################################################################################################

#Funcion LOGOUT, para destruir la sesion y la cookies rememberme
	public function logout()
 	{
 	#	setcookie('rememberme',false,time()-(3600*3650),'/',COOKIE_DOMAIN);
 		Session::destroy();
 	}

#Funcion COOKIES, borra las cookies.

 	public function deleteCookie()
    {

        setcookie('rememberme', false, time() - (3600 * 3650), '/', COOKIE_DOMAIN);
    }



    public function isUserLoggedIn()
    {
        return Session::get('user_logged_in');
    }

  #Función para la creación de nuevos usuarios
    public function registronuevo()
    {
    	if (empty($_POST['regname'])){
    		$_SESSION['feedback_negative'][] = FEEDBACK_USERNAME_FIELD_EMPTY;

    	}
    	if (empty($_POST['regemail'])){
    		$_SESSION['feedback_negative'][] = FEEDBACK_EMAIL_FIELD_EMPTY;

    	}
    	if (empty($_POST['regpasswd'])){
    		$_SESSION['feedback_negative'][] = FEEDBACK_PASSWORD_FIELD_EMPTY;

    	}

         $name = strip_tags($_POST['regname']);
           $email = strip_tags($_POST['regemail']);
           $passwd = strip_tags($_POST['regpasswd']);
  /*
    	$hash_cost_factor = (defined('HASH_COST_FACTOR') ? HASH_COST_FACTOR : null);
    	$passwd_hash = password_hash($_POST['regpasswd'], PASSWORD_DEFAULT,array('cost' => $hash_cost_factor));
*/


    #Comprobar si existe el usuario

      $consulta=$this->db->prepare("SELECT * FROM usuarios WHERE name = :name");
    	$consulta->execute(array(':name' => $name));
    	$count = $consulta->rowCount();
    	if ($count == 1){
    		$_SESSION["feedback_negative"][] = FEEDBACK_USERNAME_ALREADY_TAKEN;
    		return false;
    	}
    #Comprobar si correo existe

        $consulta=$this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
    	$consulta->execute(array(':email' => $email));
    	$count = $consulta->rowCount();
    	if ($count == 1){
    		$_SESSION["feedback_negative"][] = FEEDBACK_EMAIL_ALREADY_TAKEN;
    		return false;
    	}
    #Inserción de los usuarios en la base de datos

    	$sentencia = "INSERT INTO usuarios(name,email,password,rol) VALUES (:name,:email,:passwd,:rol)";
    	$consulta = $this->db->prepare($sentencia);
    	$consulta->execute(array(':name' => $name, ':email' => $email, ':passwd' => $passwd, ':rol' => 'usuario'));

      $count = $consulta->rowCount();
    	if ($count = 1){
    		$_SESSION["feedback_positive"][] = FEEDBACK_ACCOUNT_CREATION_GOOD;
    		return true;
    	} else {
        $_SESSION["feedback_negative"][] = FEEDBACK_ACCOUNT_CREATION_FAILED;
        return false;
      }



    }
 	}
