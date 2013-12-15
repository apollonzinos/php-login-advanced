<?php

/**
 * A simple PHP Login Script / ADVANCED VERSION
 * For more version (one-file, minimal, framework-like) visit http://www.php-login.net
 *
 * @author Panique
 * @link https://github.com/panique/php-login-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// load php-login components
require_once("php-login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("views/logged_in.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("views/not_logged_in.php");
}
