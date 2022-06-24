<?php
session_start();
//verificar que no exista color de fondo
if(!isset($_SESSION['colorfondo'])){
    $_SESSION['colorfondo']=0;
}
//verificar que no exista color de texto
if(!isset($_SESSION['colortexto'])){
    $_SESSION['colortexto']=0;
}
//verificar si fue presionado el boton enviar
if(isset($_REQUEST['enviar'])){
$colorBG=traducirColor($_REQUEST['opcolorfondo']);
$colorTxt= traducirColor($_REQUEST['opcolortxt']);
$_SESSION['colorfondo']=$colorBG;
$_SESSION['colortexto']=$colorTxt;

echo "<html>\n<head>\n<title>Eleccion de colores</title></head></html>";
echo "<body bgcolor=".$colorBG." text=".$colorTxt."></body>";

}else{
    echo "<html>\n<head>\n<title>Eleccion de colores</title></head></html>";

}
function traducirColor($color){
    switch($color){
        case "rojo":
            return "red";
        case "verde":
            return "green";
        case "azul":
            return "blue";
        case "cian":
            return "cian";    
        case "amarillo":
            return "yellow";
        case "gris":
                return "gray";    
    }
}
?>
<html>
    <body>
        
<h2>Personaliza los colores</h2>
<form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="post">
<p>Color de fondo
<select name="opcolorfondo">
<option value="rojo">rojo</option>
<option value="verde">verde</option>
<option value="azul">azul</option>
<option value="cian">cian</option>
<option value="amarillo">amarillo</option>
<option value="gris">gris</option>
</select>
</p>
<hr>
<p>Color de texto
<select name="opcolortxt">
<option value="rojo">rojo</option>
<option value="verde">verde</option>
<option value="azul">azul</option>
<option value="cian">cian</option>
<option value="amarillo">amarillo</option>
<option value="gris">gris</option>
</select>
</p>
<p><input type="submit" name="enviar"></p>

</form>
</body>
</html>