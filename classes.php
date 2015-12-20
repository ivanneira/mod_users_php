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
    echo "intenta conectar <br>";
}catch (PDOException $e) {
    echo "encuentra excepcion";
    echo $e->getMessage();

}


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
        global $mySqlPDO;


        $mySqlQ = $mySqlPDO->prepare('SELECT * FROM User');
        $mySqlQ->execute();
        $rows = $mySqlQ->fetchAll(PDO::FETCH_ASSOC);

        var_dump($rows);

    }


}