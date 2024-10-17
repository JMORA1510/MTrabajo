<?php
include_once 'BaseDatos.php';

function IniciarSesionModel($correo,$contrasenna)
{
    $enlace = AbrirBD();

    try
    {
    $enlace = AbrirBD();

    $sentencia = "CALL IniciarSesion('$correo','$contrasenna')";
    $resultado = $enlace -> query($sentencia);

    CerrarBD($enlace);
    return $resultado;
    }
    catch(Exception $e)
    {
        return null;
    }

    CerrarBD($enlace);
}

function RegistrarUsuarioModel($identificacion,$nombre,$correo,$contrasenna)
{
    try
    {
    $enlace = AbrirBD();

    $sentencia = "CALL RegistrarUsuario('$identificacion','$nombre','$correo','$contrasenna')";
    $resultado = $enlace -> query($sentencia);

    CerrarBD($enlace);
    return $resultado;
    }
    catch(Exception $e)
    {
        return false;
    }
}

function RecuperarAccesoModel($correo)
{
    $enlace = AbrirBD();



    CerrarBD($enlace);
}

?>