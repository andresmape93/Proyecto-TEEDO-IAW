<?php




class Login extends Controller
{

  function __construct()
  {
      parent::__construct();
  }


  function index()
  {
    $login_model = $this->loadModel('login');

    $this->view->render('login/index');
  }


  function login()
  {

    $login_model = $this->loadModel('Login');

    $login_successful = $login_model->login();

    if ($login_successful == 'admin') {

      header('location: '. URL . 'views/login/admin.php');

    } elseif ($login_successful == 'usuario' ){

      header('location: '. URL . 'views/login/home.php');
    } elseif ($login_successful == true ){

      header('location: '. URL . 'views/login/home.php');
    }else {

      header('location: ' . URL . 'login/index');
    }

  }


  function logout()
  {
    $login_model = $this->loadModel('Login');
    $login_model->logout();

    header('location: ' . URL);

  }

  function register()
  {
    $login_model = $this->loadModel('Login');

    $this->view->render('login/register');
  }


  function register_action()
  {
    $login_model = $this->loadModel('Login');
    $registration_successful = $login_model->registronuevo();

    if ($registration_successful == true){

        header('location: ' . URL . 'index/index');

    }else {
        header('location: ' . URL . 'views/login/register.php');

    }

  }









}


?>
