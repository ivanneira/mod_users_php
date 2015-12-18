<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 1:03
 */



class db_connection{

    //datos de conexión
    public $mySqlHost = 'localhost';
    public $mySqlUser = 'admin';
    public $mySqlPass = 'qweqwe';
    public $mySqlDb = 'AR_IVW_mgmt';

    public $pdo = new PDO( 'mysql:host=' . $mySqlHost .';dbname=' . $mySqlDb, $mySqlUser, $mySqlPass);

    function searchUser($user){
        //aca busqueda en DB

        $result = mysql('SELECT '.$user.', count(*) FROM Users GROUP BY User HAVING count(*) > 1');

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