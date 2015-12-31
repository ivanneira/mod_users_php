<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 0:34
 */

include 'classes.php';

$e = "false"; //por las dudas

//que las validaciones de entrada sean por javascript
//verifico que no vengan vacías nada mas

//BORRAR, solo para pruebas
$prueba = new db_connection();

if(isset($_POST)) {
    if($_POST["user"]!=''){
        if($_POST["pass"]!=""){

            $user = $_POST["user"];
            $pass = $_POST["pass"];

            $search = new db_connection();

            if($search->searchUser($user)){
                if($search->matchPass($user,$pass)) {
                    //único caso en el que se valida el ingreso
                    $e = 'true';
                //falso porque no coincide la contraseña
                }else $e = "false";
            //falso porque no existe el usuario
            }else $e = "false";
        //falso porque la contraseña está en blanco
        }else $e= "false";
    //falso porque el usuario está en blanco
    }else $e = "false";
//falso porque no llegó el post
}else $e = "false";

if($e == 'false'){

    //en lugar del echo, acá se envía el error de login al quien lo pide
    echo 'nombre de usuario o contraseña incorrecta';
}else{

    //en vez de echo se envía el acceso correcto a la sesion
    //tendría que ir con un token para guardar en una cookie
    //la sesión se mantendría gracias a esta cookie
    echo  'ACCESO CORRECTO';
}
?>