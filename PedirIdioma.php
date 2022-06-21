<?
include ('includes/header.php');
encabezado();
?>

<?php
function idiomas()
{

?>

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
                        elseif($_POST['usuario'] == "helly" and $_POST['clave'] == "pera" ) {
                            $_SESSION['usuario'] = $_POST['usuario'];
                            $_SESSION['clave'] = $_POST['clave'];
                            echo "Has iniciado sesión como " . $_SESSION['usuario'];
                        }
                        elseif($_POST['usuario'] == "fercu" and $_POST['clave'] == "1234" ) {
                            $_SESSION['usuario'] = $_POST['usuario'];
                            $_SESSION['clave'] = $_POST['clave'];
                            echo "Has iniciado sesión como " . $_SESSION['usuario'];
                        }
                    }
                ?>
<head>
<title>Pedir el idioma del usuario</title>


</head>
<body data-dark>
    <section class="section">
    <h2 class="title-form" data-dark>Escoge tu idioma de preferencia</h2>
    <div class="banderas">

    <a href="javascript:enviarIdioma('es');"><img src="imagenes/españa.png" alt="españa" style="width: 130px; height: 130px;"></a>
    
    <a href="javascript:enviarIdioma('en');"><img src="imagenes/ingles.png" alt="ingles" style="width: 150px; height: 150px;"></a>
    
    <a href="javascript:enviarIdioma('fr');"><img src="imagenes/francia.png" alt="francia" style="width: 150px; height: 140px;"></a>
    
    </div>
   

</section>
  
</body>
<script language="javascript" type="text/javascript">
        function enviarIdioma (idioma){
            location.href = "grabarCookie.php?idiomaUsuario=" + idioma;

        }
    </script>
    <script src="js/index.js" type="module"></script>

</html>

<?php
}?>


<?
include('includes/pie_pag.php');
pie();
?>
 