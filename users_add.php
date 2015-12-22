<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 21/12/2015
 * Time: 3:18
 */

include_once 'classes.php';

$user = $_POST["user"];
$pass = $_POST["pass"];

//verificacion de usuarios y contraseñas
if (isset($_POST)) {

    $checkVariables = new checkInput();

    if($checkVariables->check($user,$pass)=='true'){
        $e = 'true';
    }else $e = 'false del check';

}else $e = 'false del post';

echo $e;

//agrega usuario
if ($e == 'true') {

    $addUser = new db_connection();

    if ($addUser->addUser($user, $pass)=='true') {
            echo 'ingreso correcto';
    }
}else {


    echo 'ingreso incorrecto';

}