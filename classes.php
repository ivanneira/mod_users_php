<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 1:03
 */

include 'db_access.php';


    $putoPdo = new PDO('mysql:host=localhost; dbname=AR_IVW_mgmt','root','');


class db_connection{

    function searchUser($user){
        //aca busqueda solamente el usuario en DB

        return "test";

    }

    function matchPass($user,$pass){
        //busca coincidencia en usuario y contraseña.
        return "test";

    }

    function addUser($user,$pass){

        //verificar que no exista el usuario
        return "test";

        //agregar a la base de datos
    }

    function removeUser($user){
        //borrar usuario
    }

    //funcion de prueba
    function test(){



    }


}