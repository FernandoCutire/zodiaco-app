<?php

    session_start();

    if(!empty($_SESSION['usuario'])) {
        echo "Has iniciado sesión como: " . $_SESSION['usuario'] . "<br>";
        echo "Has logrado el acceso a una página segura";
        echo "<a href='logout.php'> CERRAR SESIÓN </a>";
    } else {
        echo "No estas logueado <br>";
        echo "Esta página es restringida!";
    }

?>