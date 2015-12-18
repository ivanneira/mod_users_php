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

if(isset($_POST)) {
    if($_POST["user"]!=""){
        if($_POST["pass"]!=""){

            $search = new db_connection();

            if($search->searchUser($user)=="true"){
                if($search->matchPass($user,$pass)=="true") {
                    //único caso en el que se valida el ingreso
                    $e = "true";
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



/*//Me arrepentí de validar tanto de este lado

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
*/

//este echo no debería existir en la versión final
echo $e;

?>