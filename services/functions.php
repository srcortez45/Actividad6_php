<?php

include ('conection.php');

function getConection(){
    $conection = new Conection;
    $conection = $conn->connect();
}

function getUser($user,$pass){
    $db = getConection();
    $sql = $db->prepare('SELECT user FROM users WHERE user = ? AND pass = ?;');
    $sql->execute([$user,$pass]);
    return $sql->fetchObject();
}

$resultado = $conection->prepare($sentencia);

$resultado->execute([$user,$pass]);

$datos = $resultado->fetchAll();

?>