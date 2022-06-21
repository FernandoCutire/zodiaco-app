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
    <title>Connaissez votre horoscope</title>
    <link rel="icon" href="imagenes/horoscopo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
<header class="header">
    <section class="container"> 
      
        <div class="logo"> 
           <a href="./inicio_frances.php">
        <img class="horoscopo" src="imagenes/horoscopo.png" alt="zodiac"><span> </span></a>
       <h1>Votre horoscope</h1>
        </div>
        <nav class="menu">
          <a href="inicio_frances.php">Début</a> 
          <a href="https://doc.clickup.com/31045686/d/h/xke1p-283/8ec2db1806fa6a4" target="_blank" >Signes du zodiaque</a>
          <a href="https://github.com/FernandoCutire/zodiaco-app/tree/master" target="_blank">À propos de</a>
          <a href="Iniciosesion/inicio-sesion.php">Cerrar Sesion</a>

          
        </nav>
      </section>
</header>
<button class="scroll-top-btn hidden" >&#11014;</button>
<button class="dark-mode-btn">🌙</button>
          
        </nav>
      </section>
</header>


<script src="js/index.js" type="module"></script>


</body>
</html>
<?php  }  ?>