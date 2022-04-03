<?php
include('includes/header.php');
include('includes/pie_pag.php');
encabezado();
?>
<section class="section_resultado">
    <h2 class="title_result">RESULTADO ZODIACAL</h2>
<h2 class="respuestas">Signo Zodiacal de:  <span class="persona">
    <?php echo $_POST['nombre'] ." ", " ".$_POST['apellido']; ?>
</span></h2>
<h2 class="respuestas"> Fecha de Nacimiento:
<span class="persona">
    <?php echo $_POST['dia'] ." / ", " ".$_POST['mes'], " / ". $_POST['anio']; ?>
</span>
</h2>


</span>
</h2>
</section>
        <?php
pie();
?>
