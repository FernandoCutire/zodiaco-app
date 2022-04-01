<?php
function encabezado()
{
?>
<!DOCTYPE html>
<html lang="es" data-dark>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoce tu Horoscopo</title>
    <link rel="icon" href="imagenes/horoscopo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
<header class="header">
    <section class="container"> 
      
        <div class="logo"> 
           <a href="index.html">
        <img class="horoscopo" src="imagenes/horoscopo.png" alt="zodiac"><span> </span></a>
       <h1>Tu Horoscopo</h1>
        </div>
        <nav class="menu">
          <a href="#inicio">Inicio</a> 
          <a href="#Resultados">Resultados</a>
          <a href="#Signos">Signos Zodiacales</a>
          <a href="#contacto">Contacto</a>
        </nav>
      </section>
</header>



</body>
</html>
<?php  }  ?>