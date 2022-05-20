<?
include ('includes/header.php');
encabezado();
?>

<?php
function idiomas()
{

?>

<title>Pedir el idioma del usuario</title>
   
</head>
<body>
    <section class="section">
    <h2 class="title-form">Escoge tu idioma de preferencia</h2>
    <div class="banderas">
    <a href="javascript:enviarIdioma('es');"><img src="imagenes/españa.png" alt="españa" style="width: 130px; height: 130px;"></a>
    <br>
    <a href="javascript:enviarIdioma('en');"><img src="imagenes/ingles.png" alt="ingles" style="width: 150px; height: 150px;"></a>
    <br>
    <a href="javascript:enviarIdioma('fr');"><img src="imagenes/francia.png" alt="francia" style="width: 150px; height: 140px;"></a>
    
    </div>
   

</section>
  
</body>
</html>
<script language="javascript" type="text/javascript">
        function enviarIdioma (idioma){
            location.href = "grabarCookie.php?idiomaUsuario=" + idioma;

        }
    </script>

<?php
}?>


<?
include('includes/pie_pag.php');
pie();
?>
 