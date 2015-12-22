<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 0:34
 */

include_once 'classes.php';

$e = "false"; //por las dudas

$user = $_POST["user"];
$pass = $_POST["pass"];

if (isset($_POST)) {

    $checkVariables = new checkInput();

    if($checkVariables->check($user,$pass)=='true') {

        $search = new db_connection();

        if ($search->searchUser($user) == 'true') {

            if ($search->matchPass($user, $pass) == 'true') {
                //único caso en el que se valida el ingreso
                $e = 'true';
                //falso porque no coincide la contraseña
            }
            $e = 'false';
            //falso porque no existe el usuario
        } else $e = 'false';
    }else $e = 'false';
}else $e = 'false';

//solicita acceso, envia token
if ($e == 'false') {

    echo 'nombre de usuario o contraseña incorrecta';

}else {


    echo 'ACCESO CORRECTO';

}