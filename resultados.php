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
echo $signo->getZodiaco($per->getDiaUsuario(), $per->getMesUsuario())
?>

<section class="section_resultado">
    <h2 class="title_result">RESULTADO ZODIACAL</h2>
    <h2 class="respuestas">Signo Zodiacal de:
        <span class="persona"><?php echo $per->getNombre(); ?></span>
    </h2>

    <?php echo $per->getNombre() . " ", " " . $per->getApellido(); ?>

    <h2 class="respuestas"> Fecha de Nacimiento:</h2>

    <span class="persona">
    <?php echo $per->getDiaUsuario() . " / ", " " . $per->getMesUsuario(), " / " . $per->getYearUsuario(); ?>
    </span>

    <h2 class="respuestas">Edad</h2>
    <span class="persona">
        <?php
        $per->calcularedad($per->getDiaUsuario(), $per->getMesUsuario(), $per->getYearUsuario());
        echo $per->getEdad();
        ?>
    </span>

    <h2 class="respuestas">Signo Zodiacal</h2>
    <span class="persona">
        <?php echo $signo->getSignoZodiacal() ?>
        <?php echo $signo->getFechaLarga() ?>
    </span>

    <h2 class="respuestas">Lectura</h2>
    <span class="persona">
        <?php echo $signo->getLectura() ?>
    </span>

    <h2 class="respuestas">Caballero del Zodiaco</h2>
    <span class="persona">
        <?php echo $signo->getNombreCaballero() ?>
    </span>


    <h2 class="respuestas">Imagen</h2>
    <span class="persona">
        <img src="<?php  echo $signo->getImagen() ?>" alt="Imagen del caballero" height="250px" width="500px" />
    </span>

    <h2 class="respuestas">Descripción Caballero</h2>
    <span class="persona">
        <?php echo $signo->getDescCaballero() ?>
    </span>


    <h2 class="respuestas">Fuente</h2>
    <span class="persona">
        <?php echo $signo->getFuente()?>
    </span>

    <br>

</section>
<?php
pie();
?>
