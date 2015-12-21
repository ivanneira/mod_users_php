<?php

class checkInput{

    function blank_user($user)
    {

        if (isset($_POST)) {
            if ($_POST["user"] != '') {
                if ($_POST["pass"] != "") {

                    $user = $_POST["user"];
                    $pass = $_POST["pass"];

                    $search = new db_connection();

                    if ($search->searchUser($user) == 'true') {
                        if ($search->matchPass($user, $pass) == 'true') {
                            //único caso en el que se valida el ingreso
                            $e = 'true';
                            //falso porque no coincide la contraseña
                        } else $e = "false";
                        //falso porque no existe el usuario
                    } else $e = "false";
                    //falso porque la contraseña está en blanco
                } else $e = "false";
                //falso porque el usuario está en blanco
            } else $e = "false";
          //falso porque no llegó el post
        } else $e = "false";
    }

    function blankPass(){

    }

    function issetPost(){

    }


}


?>