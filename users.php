<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 0:34
 */

include 'classes.php';

$e = "sin errores";

if(isset($_POST)){
    if($_POST["user"]==""){
        $e = "se recibio un nombre de usuario en blanco";
    }
    if($_POST["pass"]==""){
        if($e == "se recibio un nombre de usuario en blanco"){
            $e = "se recibio usuario y contraseña en blanco";
        }else{
            $e = "se recibio contraseña en blanco";
        }
    }
}else{
    $e = "no se recibio el post";
}

//si no se encontraron errores, las consultas comienzan acá
if($e == "sin errores"){

    $busqueda = new db_connection();
    $resultado = "sin resultado";

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $resultado = $busqueda->searchUser($user);

    if($resultado!="sin resultado"){

        $resultado = $busqueda->matchPass($user,$pass);

        if($resultado=="true"){
            $e = "true";
        }else{
            $e = "false";
        }
    }else{
        $resultado = "no se encuentra el usuario";
    }



}else{
    $e = "Ocurrio un error: ".$e;

}

//este echo no debería existir en la versión final
echo $e;

?>