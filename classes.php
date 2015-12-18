<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 1:03
 */



class db_connection{

    //datos de conexión
    $mySqlHost = 'localhost';
    $mySqlUser = 'admin';
    $mySqlPass = 'qweqwe';
    $mySqlDb = 'AR_IVW_mgmt';

    $link = mysql_connect($mySqlHost, $mySqlUser, $mySqlPass )
        or die ('mysql conection fail: '.mysql_error());

    mysql_select_db($mySqlDb) or die ('database conection fail');



    function searchUser($user){
        //aca busqueda en DB

        $result = mysql('SELECT '.$user.' FROM users');

        echo $result;

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
}