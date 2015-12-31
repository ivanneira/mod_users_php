<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 21/12/2015
 * Time: 3:18
 */

include_once 'classes.php';

//verificacion de usuarios y contraseñas
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $checkVariables = new checkInput();
    $e = $checkVariables->check($user,$pass) ? "true" : "false del check";
}else
    $e = 'false del post';

echo $e;

//agrega usuario
if ($e == 'true') {
    $addUser = new db_connection();
    if ($addUser->addUser($user, $pass)) {
        echo 'ingreso correcto';
    }
}else {
    echo 'ingreso incorrecto';
}