<?php
include('includes/header.php');
include('includes/pie_pag.php');
include('clases/Persona.php');
include('clases/SignoZodiacal.php');

encabezado();
?>

<?php
$per = new Persona();
$signo = new SignoZodiacal();
$per->setNombre($_POST["nombre"]);
$per->setApellido($_POST["apellido"]);
$per->setDiaUsuario($_POST['dia']);
$per->setMesUsuario($_POST['mes']);
$per->setYearUsuario($_POST['anio']);
$signo->getZodiaco($per->getDiaUsuario(), $per->getMesUsuario())
?>

    <section class="section_resultado">
        <h2 class="title_result">RESULTADO ZODIACAL</h2>
        <img src="imagenes/lecture.png" alt="lecture" style="width: 150px; height: 150px;">

        <h2 class="respuestas">Tu Nombre:
            <span class="persona"><?php echo $per->getNombre() . " ", " " . $per->getApellido(); ?></span>
        </h2>



        <h2 class="respuestas"> Fecha de Nacimiento:

            <span class="persona">
    <?php echo $per->getDiaUsuario() . " / ", " " . $per->getMesUsuario(), " / " . $per->getYearUsuario(); ?>
    </span></h2>

        <h2 class="respuestas">Tu edad es:
            <span class="persona">
        <?php
        $per->calcularedad($per->getDiaUsuario(), $per->getMesUsuario(), $per->getYearUsuario());
        echo $per->getEdad();
        ?>
    </span></h2>

        <h2 class="respuestas">Tu Signo Zodiacal es:
            <span class="persona">
        <?php echo $signo->getSignoZodiacal() ?><br><br>
        <?php echo $signo->getFechaLarga() ?>
    </span></h2>

        <h2 class="respuestas">Lectura:</h2>
        <span class="persona">
        <p class="parrafo-resp">
        <?php echo $signo->getLectura() ?></p>
    </span>

        <h2 class="respuestas">Caballero del Zodiaco:
            <span class="persona">
        <?php echo $signo->getNombreCaballero() ?>
    </span></h2>


        <h2 class="respuestas">
    <span class="persona">
        <img src="<?php  echo $signo->getImagen() ?>" alt="Imagen del caballero" height="90px" width="150px" />
    </span></h2>

        <h2 class="respuestas">Descripción Caballero</h2>
        <span class="persona">
        <p class="parrafo-resp"><?php echo $signo->getDescCaballero() ?></p>
    </span>



        <br>

    </section>
<?php
pie();
?>