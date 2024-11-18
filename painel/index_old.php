<?php
require_once("verificar.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/custom_adm.css">
    <title>Painel Administrativo</title>
</head>
<body>






<!--inicio navebar-->

<nav class="navbar">
    <div class="navbar-content">
        <div class="bars"> 
        <i class="fa-solid fa-bars"></i>
        </div>
        <img src="../img/logo-login.png" alt="sistema" width="40px">
    </div>
    <div class="navbar-content">
        <div class="notification">
        <i class="fa-solid fa-bell"></i>
        <span class="number">7</span>
        <div class="dropdown-content">
            <li>
                <img src="img/users/user.png" alt="usuario" width="40">
                <div class="text">Notificação de Usuario</div>
            </li>
        </div>
        </div>
        <div class="avatar">
            <img src="img/users/user.png" alt="usuario" width="40">
            <div class="dropdown-menu setting">
                <div class="item">
                    <span class="fa-solid fa-user"></span>Perfil
                </div>

                <div class="item">
                    <span class="fa-solid fa-gear"></span>Configuração
                </div>

                <div class="item">
                    <span class="fa-solid fa-arrow-right-from-bracket"></span><a href="logout.php">Sair</a>
                </div>

            </div>
        </div>
    </div>

</nav>

<!--fim navebar-->
    
</body>
</html>
