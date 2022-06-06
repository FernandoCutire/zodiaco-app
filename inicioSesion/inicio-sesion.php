<?php
    session_start();
?>

<html>
    <head>
        <title>Sesiones en PHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>

    <body>
        <tr width="500"
               border="0" align="center"
               cellpadding="0" cellspacing="0">
            <tr></tr>
            <td>
                <?php
                    if(isset($_POST['enviar'])) {
                        if(empty($_POST['usuario']) || empty($_POST['clave'])) {
                            echo "Debe llenar todos los campos";
                        }
                        elseif($_POST['usuario'] == "test" and $_POST['clave'] == "test" ) {
                            $_SESSION['usuario'] = $_POST['usuario'];
                            $_SESSION['clave'] = $_POST['clave'];
                            echo "Has iniciado sesión como " . $_SESSION['usuario'];
                        }
                    }
                ?></td>
            <td rowspan="2">
                <form name="login" method="post" action="inicio-sesion.php">
                    <table width="250"
                           border="0" align="center"
                    cellpadding="0" cellspacing="0">
                <tr>
                    <td>Usuario:</td>
                    <td><input name="usuario" type="text" id="usuario"></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input name="clave" type="password" id="clave"></td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input name="enviar" type="submit" id="enviar" value="Enviar">
                    </td>
                </tr>
                </table>
                </form></td>
            </tr>
        <tr>
            <td><a href="segura.php">PÁGINA SEGURA</a></td>
        </tr>
        </table>
    </body>
</html>
