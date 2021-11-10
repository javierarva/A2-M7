<?php

require_once 'db/database.php';
require_once 'lib/conn.php';
require_once 'config.php';

$db = getConnection($dsn, $dbuser, $dbpasswd);

if (($listname = filter_input(INPUT_POST, 'listname2') != null)) {

    $user = $_SESSION['uname'];

    if(lists($db, $user, $listname)) {
        echo 'Lista creada correctamente.';
    } else {
        echo 'Parámetros incorrectos o el nombre de la lista ya está asignado, prueba otro.';
    }
    
}
