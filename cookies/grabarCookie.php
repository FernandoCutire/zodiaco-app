<?php
//se graba una cookie con una validez de 24 horas
//NOMBRE, VALOR, TIEMPO -->
setcookie("idiomaUsuario",$_GET["idiomaUsuario"], time()+86400);

?>
9
<html>
    <body>
        <script language="javascript" type="text/javascript">
            //se regresa a la pagina principal
            location.href ="index.php";

        </script>
    </body>
</html>