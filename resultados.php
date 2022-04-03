<?php
include('includes/header.php');
include('includes/pie_pag.php');
include('clases/Persona.php');
encabezado();
?>

<?php
$per = new Persona();

?>

<section class="section_resultado">
    <h2 class="title_result">RESULTADO ZODIACAL</h2>
    <h2 class="respuestas">Signo Zodiacal de:
        <span class="persona"><?php echo $_POST["nombre"]; ?></span>
    </h2>

    <?php echo $_POST['nombre'] . " ", " " . $_POST['apellido']; ?>

    <h2 class="respuestas"> Fecha de Nacimiento:</h2>

    <span class="persona">
    <?php echo $_POST['dia'] . " / ", " " . $_POST['mes'], " / " . $_POST['anio']; ?>
    </span>

    <h2 class="respuestas">Edad</h2>
    <span class="persona">
        <?php
        $per->calcularedad($_POST['dia'], $_POST['mes'], $_POST['anio']);
        echo $per->getEdad();
        ?>
    </span>

</section>
<?php
pie();
?>
