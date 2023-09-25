<?php
session_start();
if ($_SESSION['CORREO']!="") {
?>

<!doctype html>
<html lang="es">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title>Amasandería San Pablo</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/jpg" href="img/MODELO-PORTAL.JPG"/>

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        </style>

        
        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">
    </head>
    <body>
        <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php" >Amasanderia San Pablo <img src = "img/MODELO-PORTAL.jpg" width="50" height="40"></a>
            
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="logout.php">Cerrar Sesión</a>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                        <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=categoria_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/ordenar.png" width = "15" height = "15"> Categorias
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=products_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/cajas.png" width = "15" height = "15"> Productos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=insumos_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/caja.png" width = "15" height = "15"> Insumos
                                </a>
                            </li>
                            <?php if ($_SESSION['CORREO'] == "admin@admin.com") {?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=proveedor_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/usuarios-alt.png" width = "15" height = "15"> Proveedores
                                </a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=inventario_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/desembalaje.png" width = "15" height = "15"> Inventario
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=ventas_create">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/porcentaje.png" width = "15" height = "15"> Ventas
                                </a>
                            </li>
                            <?php if ($_SESSION['CORREO'] == "admin@admin.com") {?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=users_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/usuario.png" width = "15" height = "15"> Usuarios
                                </a>
                            </li>
                            <?php } ?>
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=rol_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/trabajo.png" width = "15" height = "15"> ROL Trabajador
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=usuario_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/usuario (2).png" width = "15" height = "15"> Empleados
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=horario_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/reloj.png" width = "15" height = "15"> Horario
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=reclamo_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/alerta.png" width = "15" height = "15"> Reclamos
                                </a>
                            </li>
                            <li class="nav-item">                  
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=sucursal_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/hogar.png" width = "15" height = "15"> Sucursal
                                </a>
                            </li> 
                            
                            <?php if ($_SESSION['CORREO'] == "admin@admin.com") {?>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=ciudad_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/hogar.png" width = "15" height = "15"> Ciudad
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=calle_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/hogar.png" width = "15" height = "15"> Calle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?modulo=direccion_index">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    <img src = "img/hogar.png" width = "15" height = "15"> Direccion
                                </a>
                            </li>
                            
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <?php
                        if (isset($_GET['modulo']) && $_GET['modulo']!="") {
                            $split = explode("_",$_GET['modulo']);
                            $folder = $split[0];
                            $module = $split[1];
                            include("views/".$folder."/".$module.".php");
                        } else {
                            include("views/reportes/index.php");
                        }
                    ?>
                </main>
            </div>
        </div>
        <!-- <script type="text/javascript" src="js/funciones.js"></script> -->
    </body>
</html>
<?php
} else {
    header("Location: login.php");
}


?>