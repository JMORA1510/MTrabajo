<?php

function AbrirBD()
{
    return mysquli_connect("127.0.0.1:3308","root","","cursobd");
}

function CerrarBD($enlace)
{
    mysqli_close($enlace)
}

?>