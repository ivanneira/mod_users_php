<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 1:03
 */

include_once 'db_access.php';

$mySqlPDO = new PDO('mysql:host='.$mySqlHost.';dbname='.$mySqlDb, $mySqlUser, $mySqlPass);


class db_connection{

    function searchUser($user){
        //aca busqueda solamente el usuario en la DB


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
        $statement = $mySqlPdo->prepare("SELECT * FROM User");
        $statement->execute();

        var_dump($statement->fetch());



    }


}