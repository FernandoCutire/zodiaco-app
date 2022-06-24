<?php

use Models\Persona;
use Models\SignoZodiacalFrances;

include('../includes/header_frances.php');
include('../includes/pie_pag_frances.php');
include('../../../app/Models/Persona.php');
include('../../../app/Models/SignoZodiacalFrances.php');

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
    <html data-dark></html>
    <section class="section_resultado" data-dark>
        <h2 class="title_result">RÉSULTATS ZODIACAUX</h2>
        <img src="../../imgs/lecture.png" alt="lecture" style="width: 150px; height: 150px;">

        <div class="respuestas" data-dark><h2>Votre nom:
                <span class="persona" data-dark><?php echo $per->getNombre() . " ", " " . $per->getApellido(); ?></span>
            </h2></div>


        <div class="respuestas" data-dark><h2> Date de naissance:

                <span class="persona" data-dark>
    <?php echo $per->getDiaUsuario() . " / ", " " . $per->getMesUsuario(), " / " . $per->getYearUsuario(); ?>
    </span></h2></div>

        <div class="respuestas" data-dark><h2>Votre âge est:
                <span class="persona" data-dark>
        <?php
        $per->calcularedad($per->getDiaUsuario(), $per->getMesUsuario(), $per->getYearUsuario());
        echo $per->getEdad();
        ?>
    </span></h2></div>

        <div class="respuestas" data-dark><h2>Signe du zodiaque:
                <span class="persona" data-dark>
        <?php echo $signo->getSignoZodiacal() ?><br><br>
        <?php echo $signo->getFechaLarga() ?>

    </span></h2></div>

        <div class="respuestas" data-dark>
    <span class="persona" data-dark>
        <img src="<?php echo $signo->getImgZodiaco() ?>" alt="Imagen zodiaco" height="90px" width="150px"/>
    </span></div>

        <div class="respuestas" data-dark>
            <h2>Conférence:
                <p class="persona--desc" data-dark>
                    <?php echo $signo->getLectura() ?>
                </p>
                </span></h2>
        </div>

        <div class="respuestas" data-dark><h2>Chevalier du Zodiaque:
                <span class="persona" data-dark>
        <?php echo $signo->getNombreCaballero() ?>
    </span></h2></div>


        <div class="respuestas" data-dark>
    <span class="persona" data-dark>
        <img src="<?php echo $signo->getImagen() ?>" alt="Imagen del caballero" height="90px" width="150px"/>
    </span></div>

        <div class="respuestas" data-dark>
            <h2>Description du chevalier
                <p class="persona--desc" data-dark>
                    <?php echo $signo->getDescCaballero() ?></p>
                </span></h2>
        </div>

        <a class="btn-volver" href="../inicio/inicio_frances.php">Retournez à la maison</a>

        <br>

    </section>
<?php
pie();
?>