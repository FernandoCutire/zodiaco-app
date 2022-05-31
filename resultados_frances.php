<?php
include('includes/header_frances.php');
include('includes/pie_pag_frances.php');
include('clases/Persona.php');
include('clases/SignoZodiacalFrances.php');

encabezado();
?>

<?php
$per = new Persona();
$signo = new SignoZodiacalFrances();
$per->setNombre($_POST["nombre"]);
$per->setApellido($_POST["apellido"]);
$per->setDiaUsuario($_POST['dia']);
$per->setMesUsuario($_POST['mes']);
$per->setYearUsuario($_POST['anio']);
$signo->getZodiaco($per->getDiaUsuario(), $per->getMesUsuario())
?>

    <section class="section_resultado">
        <h2 class="title_result">RÉSULTATS ZODIACAUX</h2>
        <img src="imagenes/lecture.png" alt="lecture" style="width: 150px; height: 150px;">

        <div class="respuestas"><h2>Votre nom:
            <span class="persona"><?php echo $per->getNombre() . " ", " " . $per->getApellido(); ?></span>
        </h2></div>



        <div class="respuestas"><h2> Date de naissance:

            <span class="persona">
    <?php echo $per->getDiaUsuario() . " / ", " " . $per->getMesUsuario(), " / " . $per->getYearUsuario(); ?>
    </span></h2></div>

        <div class="respuestas"><h2>Votre âge est:
            <span class="persona">
        <?php
        $per->calcularedad($per->getDiaUsuario(), $per->getMesUsuario(), $per->getYearUsuario());
        echo $per->getEdad();
        ?>
    </span></h2></div>

        <div class="respuestas"><h2>Signe du zodiaque:
            <span class="persona">
        <?php echo $signo->getSignoZodiacal() ?><br><br>
        <?php echo $signo->getFechaLarga() ?>

    </span></h2></div>

    <div class="respuestas">
    <span class="persona">
        <img src="<?php  echo $signo->getImgZodiaco() ?>" alt="Imagen zodiaco" height="90px" width="150px" />
    </span></div>

        <div class="respuestas"><h2>Conférence:
        <p class="persona--desc">
            <?php echo $signo->getLectura() ?>
        </p>
    </span></h2></div>

        <div class="respuestas"><h2>Chevalier du Zodiaque:
            <span class="persona">
        <?php echo $signo->getNombreCaballero() ?>
    </span></h2></div>


        <div class="respuestas">
    <span class="persona">
        <img src="<?php  echo $signo->getImagen() ?>" alt="Imagen del caballero" height="90px" width="150px" />
    </span></div>

        <div class="respuestas"><h2>Description du chevalier
        <p class="persona--desc">
       <?php echo $signo->getDescCaballero() ?></p>
    </span></h2></div>

        <a class="btn-volver" href="inicio_frances.php">Retournez à la maison</a>

        <br>

    </section>
<?php
pie();
?>