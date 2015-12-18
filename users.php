<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 0:34
 */

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

if($e == "sin errores"){


}else{
    $e = "Ocurrio un error: ".$e;

}

//este echo no debería existir en la versión final
echo $e;

?>