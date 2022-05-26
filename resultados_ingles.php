<?php
include('includes/header_ingles.php');
include('includes/pie_pag_ingles.php');
include('clases/Persona.php');
include('clases/SignoZodiacalIngles.php');

encabezado();
?>

<?php
$per = new Persona();
$signo = new SignoZodiacalIngles();
$per->setNombre($_POST["nombre"]);
$per->setApellido($_POST["apellido"]);
$per->setDiaUsuario($_POST['dia']);
$per->setMesUsuario($_POST['mes']);
$per->setYearUsuario($_POST['anio']);
$signo->getZodiaco($per->getDiaUsuario(), $per->getMesUsuario())
?>

    <section class="section_resultado">
        <h2 class="title_result">ZODIACAL RESULTS</h2>
        <img src="imagenes/lecture.png" alt="lecture" style="width: 150px; height: 150px;">

        <div class="respuestas"><h2>Your Name:
            <span class="persona"><?php echo $per->getNombre() . " ", " " . $per->getApellido(); ?></span>
        </h2></div>



        <div class="respuestas"><h2> Date of Birth:

            <span class="persona">
    <?php echo $per->getDiaUsuario() . " / ", " " . $per->getMesUsuario(), " / " . $per->getYearUsuario(); ?>
    </span></h2></div>

        <div class="respuestas"><h2>Your age is:
            <span class="persona">
        <?php
        $per->calcularedad($per->getDiaUsuario(), $per->getMesUsuario(), $per->getYearUsuario());
        echo $per->getEdad();
        ?>
    </span></h2></div>

        <div class="respuestas"><h2>Zodiac sign:
            <span class="persona">
        <?php echo $signo->getSignoZodiacal() ?><br><br>
        <?php echo $signo->getFechaLarga() ?>

    </span></h2></div>

    <div class="respuestas">
    <span class="persona">
        <img src="<?php  echo $signo->getImgZodiaco() ?>" alt="Imagen zodiaco" height="90px" width="150px" />
    </span></div>

        <div class="respuestas"><h2>Lecture:
        <p class="persona--desc">
            <?php echo $signo->getLectura() ?>
        </p>
    </span></h2></div>

        <div class="respuestas"><h2>Knights of the Zodiac:
            <span class="persona">
        <?php echo $signo->getNombreCaballero() ?>
    </span></h2></div>


        <div class="respuestas">
    <span class="persona">
        <img src="<?php  echo $signo->getImagen() ?>" alt="Imagen del caballero" height="90px" width="150px" />
    </span></div>

        <div class="respuestas"><h2>Knight Description
        <p class="persona--desc">
       <?php echo $signo->getDescCaballero() ?></p>
    </span></h2></div>

        <a class="btn-volver" href="inicio_ingles.php">Go back to home</a>

        <br>

    </section>
<?php
pie();
?>