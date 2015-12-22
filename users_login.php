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

    if($checkVariables->check($user,$pass)=='true'){
        $e = 'true';
    }else $e = 'false';
}else $e = 'false';

//solicita acceso, envia token
if ($e == 'false') {

    echo 'nombre de usuario o contraseña incorrecta';

}else {


    echo 'ACCESO CORRECTO';

}