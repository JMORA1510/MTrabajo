<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Clase/Controller/LoginController.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    function MostrarMenu()
    {
        echo '
            <aside class="left-sidebar">
                <div>
                    <div class="brand-logo d-flex align-items-center justify-content-between">
                        <a href="home.php" class="text-nowrap logo-img">
                            <img src="../images/logo-light.svg" alt="" />
                        </a>
                        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                            <i class="ti ti-x fs-8"></i>
                        </div>
                    </div>

                    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../Login/home.php" aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Inicio</span>
                                </a>
                            </li>
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                                <span class="hide-menu">Mantenimientos</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="../Usuario/consultarUsuarios.php" aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6">
                                        </iconify-icon>
                                    </span>
                                    <span class="hide-menu">Usuarios</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        ';
    }

    function MostrarHeader()
    {
        $usuario = "Invitado";
        if(isset($_SESSION["NombreUsuario"]))
        {
            $usuario = $_SESSION["NombreUsuario"];
        }

        echo '
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        ' . $usuario . '
                            <li class="nav-item dropdown">

                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../images/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">';

                                        if(isset($_SESSION["NombreUsuario"]))
                                        {
                                            echo '
                                                <a href="javascript:void(0)"
                                                    class="d-flex align-items-center gap-2 dropdown-item">
                                                    <i class="ti ti-user fs-6"></i>
                                                    <p class="mb-0 fs-3">Mi Perfil</p>
                                                </a>
                                                <a href="../Usuario/cambiarAcceso.php"
                                                    class="d-flex align-items-center gap-2 dropdown-item">
                                                    <i class="ti ti-list-check fs-6"></i>
                                                    <p class="mb-0 fs-3">Seguridad</p>
                                                </a>

                                                <form action="" method="POST">
                                                    <button type="submit" style="width:150px" id="btnCerrarSesion" name="btnCerrarSesion"
                                                    class="btn btn-outline-primary mx-3 mt-2 d-block">Cerrar Sesión</button>
                                                </form>';
                                        }
                                        else
                                        {
                                            echo '<a href="../Login/inicioSesion.php" style="width:150px"
                                                    class="btn btn-outline-primary mx-3 mt-2 d-block">Iniciar Sesión</a>';
                                        }
                                        
                                    echo '
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        ';
    }

?>