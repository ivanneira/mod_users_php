<?php
/**
 * Created by PhpStorm.
 * User: ae
 * Date: 18/12/2015
 * Time: 1:03
 */

include_once 'db_access.php';

try {
    $mySqlPDO = new PDO('mysql:host=' . $mySqlHost . ';dbname=' . $mySqlDb, $mySqlUser, $mySqlPass);

}catch (PDOException $e) {

    echo $e->getMessage();

}


class db_connection{

    function searchUser($user){
        //aca busqueda solamente el usuario en la DB
        $query = '';
        global $mySqlPDO;

        $mySqlQ = $mySqlPDO->prepare($query);
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);


    }

    function matchPass($user,$pass){
        //busca coincidencia en usuario y contraseña.
        $query = '';
        global $mySqlPDO;

        $mySqlQ = $mySqlPDO->prepare($query);
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);

    }

    function addUser($user,$pass){

        //verificar que no exista el usuario
        $query = '';
        global $mySqlPDO;

        $mySqlQ = $mySqlPDO->prepare($query);
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);

        //agregar a la base de datos
        $query = '';
        global $mySqlPDO;

        $mySqlQ = $mySqlPDO->prepare($query);
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);
    }

    function removeUser($user){
        //borrar usuario
        $query = '';
        global $mySqlPDO;

        $mySqlQ = $mySqlPDO->prepare($query);
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);
    }



}