<?php

session_name("SitemaComercial1");
    session_start();
    
    //validar usuario para que no ingrese por la ruta directamente
    if (!isset($_SESSION["s_dni"])) {
        header("location:index.php");
        exit;
    }
    
    //capturando datos del usuario
//    $nombreUsuario= ucwords(strtolower($_SESSION["s_nombre_usuario"]));
//    $cargoUsuario=$_SESSION["s_cargo_usuario"];
    $dni=$_SESSION["s_dni"];
    
    if (file_exists("../imagenes/".$dni.".png")) {
        $fotoUsuario=$dni.".png";
    }else{
        $fotoUsuario="sin-foto.jpg";
    }