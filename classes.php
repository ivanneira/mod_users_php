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

    //Busca el usuario en la base de datos
    function searchUser($user){
        $query = 'SELECT COUNT(*) FROM User WHERE Name = \''.$user.'\'';
        global $mySqlPDO;

        $mySqlQ = $mySqlPDO->prepare($query);
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);

        if( ($rows[0]["COUNT(*)"])>=1) {

            return 'true';

        }else{
            return 'false';
        }

    }

    //busca coincidencia entre usuario y contraseña
    function matchPass($user,$pass){
        $query = 'SELECT \'Password\' FROM \'User\' WHERE User =\''.$user.'\'';
        global $mySqlPDO;

        $mySqlQ = $mySqlPDO->prepare($query);
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);

        var_dump($rows);

        return 'true';

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