<?php

error_reporting(E_ALL);
ini_set("display_errors",1);


define('URL', 'http://www.teedo.com/');

define('LIBS_PATH', 'libs/');
define('CONTROLLER_PATH', 'controllers/');
define('MODELS_PATH', 'models/');
define('VIEWS_PATH', 'views/');



define('COOKIE_RUNTIME', 1209600);

define('COOKIE_DOMAIN', '.localhost');


define("HASH_COST_FACTOR", "10");


define("FEEDBACK_USERNAME_FIELD_EMPTY", "Username field was empty.");
define("FEEDBACK_PASSWORD_FIELD_EMPTY", "Password field was empty.");
define("FEEDBACK_LOGIN_FAILED", "Login failed.");
define("FEEDBACK_EMAIL_FIELD_EMPTY", "Email field was empty.");
define("FEEDBACK_USERNAME_ALREADY_TAKEN", "Sorry, that username is already taken. Please choose another one.");
define("FEEDBACK_USER_EMAIL_ALREADY_TAKEN", "Sorry, that email is already in use. Please choose another one.");
define("FEEDBACK_ACCOUNT_CREATION_FAILED", "Sorry, your registration failed. Please go back and try again.");
define("FEEDBACK_ACCOUNT_CREATION_GOOD","Registro correcto");



?>
