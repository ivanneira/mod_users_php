<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 5/1/16
 * Time: 00:55
 */

include_once 'classes.php';

//busca si existe el usuario
if (isset($_POST["user"])) {
    $user = $_POST["user"];
    $e = true;
}else
    $e = false;

//agrega usuario
if ($e) {
    $remUser = new db_connection();

    if ($remUser->removeUser($user)) {
        echo 'se borró correctamente';
    } else {
        echo 'no se borró el usuario o el usuario no existe';
    }
}