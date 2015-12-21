<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 0:34
 */

include_once 'classes_db_access.php';
include_once 'classes_verifications.php';

$e = "false"; //por las dudas




//solicita acceso, envia token
if ($e == 'false') {

    echo 'nombre de usuario o contraseña incorrecta';

}else {


    echo 'ACCESO CORRECTO';

}


?>