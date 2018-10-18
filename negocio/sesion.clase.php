<?php

require '../datos/Conexion.clase.php';

class Sesion extends Conexion {

    private $dni;
    private $clave;
    private $recordarUsuario;

    function getDni() {
        return $this->dni;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

        
    function getClave() {
        return $this->clave;
    }

    function getRecordarUsuario() {
        return $this->recordarUsuario;
    }

    

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setRecordarUsuario($recordarUsuario) {
        $this->recordarUsuario = $recordarUsuario;
    }

    public function iniciarSesion() {
        try {
            $sql = "select nombre, clave, estado, dni from usuario where dni=:p_dni";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->bindParam(":p_dni", $this->getDni());
            $sentencia->execute();
            $resultado = $sentencia->fetch();

            if ($resultado["clave"] == md5($this->getClave())) {
                if ($resultado["estado"] == "I") {
                    return 0;
                } else {
                    session_name("SitemaComercial1");
                    session_start();
             
                   $_SESSION["s_nombre"] = $resultado["nombre"];
//                    $_SESSION["s_cargo_usuario"] = $resultado["cargo"];
                    $_SESSION["s_dni"] = $resultado["dni"];

                    if ($this->getRecordarUsuario() == "S") {
                        setcookie("loginusuario", $this->getDni(), 0, "/");
                    } else {
                        setcookie("loginusuario", "", 0, "/");
                    }
                    return 1;
                }
            } else {
                return 2;
            }
        } catch (Exception $exc) {
            throw $exc;
        }
}}