
<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="icon" href="../imagenes/horoscopo.png">
    <link rel="stylesheet" href="../estilos/style.css">
</head>
    <body>

    <header class="header">
    <section class="container"> 
      
        <div class="logo"> 
           <a href="./inicio.php">
        <img class="horoscopo" src="../imagenes/horoscopo.png" alt="zodiac"><span> </span></a>
       <h1>Tu Horóscopo</h1>
        </div>
        <nav class="menu">
          <a href="inicio.php">Inicio</a> 
          <a href="https://doc.clickup.com/31045686/d/h/xke1p-283/8ec2db1806fa6a4" target="_blank" >Signos Zodiacales</a>
          <a href="https://github.com/FernandoCutire/zodiaco-app/tree/master" target="_blank">Acerca de</a>
          
        </nav>
      </section>
</header>

<section class="section">

<div class="formulario"><br><br>
    <h2 class="title-form">Iniciar Sesion</h2>
    <form name="login" method="post" action="../seleccionIdiomas.php"><br>


        <label>Usuario:     </label>
        <input name="usuario" type="text" id="usuario"> <br><br>

        <label>Contraseña:  </label>
        <input name="clave" type="password" id="clave"><br><br>

        <div class="center">
      
<input name="enviar" type="submit" id="enviar" value="Enviar" class="sub"></a><br><br>
<a href="segura.php">PÁGINA SEGURA</a>


    </body>

</html>
