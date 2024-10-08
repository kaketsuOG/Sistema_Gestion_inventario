<?php
if (isset($_POST['email']) && $_POST['email']!="" && isset($_POST['password']) && $_POST['password']!="") {
    include_once("controller/auth.php");
    $auth = new Auth();
    $validate = $auth->Login($_POST['email'],$_POST['password']);
    if ($validate) {
      header("Location: index.php");
    } else {
        echo '<script>alert("Usuario y/o Contraseña Incorrecta.");</script>';
    }
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Amasandería San Pablo - Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link rel="icon" type="image/jpg" href="img/MODELO-PORTAL.JPG"/>
<link href="css/bootstrap.min.css" rel="stylesheet">

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
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="login.php" method="POST">
    <img class="mb-4" src="img/MODELO-PORTAL.JPG" alt="" width="100" height="90">
    <h1 class="h4 mb-3 fw-normal">Bienvenido, Inicie Sesión</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required autofocus>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-4">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar</button>
    <p class="mt-5 mb-3 text-muted">&copy; BDS</p>
  </form>
</main>


    
  </body>
</html>
