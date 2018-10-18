<?php

require_once '../negocio/Sesion.clase.php';
require_once '../negocio/numeroAleatorios.clase.php';
require_once '../util/funciones/Funciones.clase.php';

try {
    //echo '<pre>';
    //print_r($_POST); //mostrar los datos que llegan por el metodo post
    //echo '</pre>';
    
    $dni = $_POST["txtdni"];
    $clave = $_POST["txtclave"];
    
    if ( isset(  $_POST["chkrecordar"]  )  ) {
        $recordar = $_POST["chkrecordar"];
    }else{
        $recordar = "N";
    }
    
    $objSesion = new Sesion();
    $objAle = new numeroAleatorios();
    $arr = $objAle->numeroAleatorio();
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    
    $resultado = $objSesion->iniciarSesion();
    
    switch ($resultado) {
        case 0: //Usuario inactivo, no puede ingresar
            Funciones::mensaje("El usuario esta inactivo", "a", "../vista/index.php", 5);
            break;

        case 1: //Usuario activo, si puede ingresar
            header("location:../vista/principal.vista.php");
            break;
        
        default:
            Funciones::mensaje("El usuario o la contraseña son incorrectos", "e", "../vista/index.php", 5);
            break;
    }
    
    
} catch (Exception $exc) {
    Funciones::mensaje($exc->getMessage(), "e");
}

