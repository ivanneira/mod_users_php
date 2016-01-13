# mod_users_php

[![Join the chat at https://gitter.im/ivanneira/mod_users_php](https://badges.gitter.im/ivanneira/mod_users_php.svg)](https://gitter.im/ivanneira/mod_users_php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
modulo de validacion de usuarios en php y mysql

se envían los datos "user" y "pass" mediante post, hay un archivo index.php que contiene el html para hacer las pruebas
se puede llamar a los archivos:

-users_login.php
 se envía usuario y contraseña con los nombres "user" y "pass" y verifica si coinciden con la base de datos, devolviendo si el ingreso fue correcto o no.
-users_add.php
 se envía usuario y contraseña con los nombres "user" y "pass" y primero verifica si no existe anteriormente y de no existir lo agrega en la BD.
-users_remove.php
 se envía solamente el usuario y en caso de que exista lo elimina de la base de datos
 NO VERIFICA
 
-db_access.php
 contiene los datos de ingreso a mysql, modifique las variables para adecuarse al acceso a su bd
 
-db_structure.json
  contiene un json informatico con los nombres que debería tener las columnas de mysql
  
-classes.php
  clase principal.
  
  por ae , contacto@ivanneira.com.ar , ivanneira.com.ar
