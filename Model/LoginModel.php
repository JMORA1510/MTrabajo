<?php
include_once 'BaseDatos.php'

function IniciarSesionModel($correo,$contrasenna)
{
    $enlace = AbrirBD();



    CerrarBD($enlace);
}

function RegistrarUsuarioModel($identificacion,$nombre,$correo,$contrasenna)
{
    $enlace = AbrirBD();



    CerrarBD($enlace);
}

function RecuperarAccesoModel($correo)
{
    $enlace = AbrirBD();



    CerrarBD($enlace);
}

?>