<?php
//verificar que no exista color de fondo <?php
if(!isset($_COOKIE['colorfondo'])){
    setcookie("colorfondo", time()+800000);

}
//verificar que no exista color de texto
if(!isset($_COOKIE['colortexto'])){
    setcookie("colortexto", time()+800000);

}
//verificar si fue presionado el boton enviar
if(isset($_REQUEST['enviar'])){
$colorBG=traducirColor($_REQUEST['opcolorfondo']);
$colorTxt= traducirColor($_REQUEST['opcolortxt']);
$_COOKIE['colorfondo']=$colorBG;
$_COOKIE['colortexto']=$colorTxt;

echo "<html>\n<head>\n<title>Eleccion de colores</title></head></html>";
echo "<body bgcolor=".$colorBG." text=".$colorTxt."></body>";
echo "<section bgcolor=".$colorBG." text=".$colorTxt."></section>";
echo "<div bgcolor=".$colorBG." text=".$colorTxt."></div>";


}else{
    echo "<html>\n<head>\n<title>Eleccion de colores</title></head></html>";

}
function traducirColor($color){
    switch($color){
      case "blanco":
          return "white";
      case "negro":
          return "#1C1E21";
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
<option value="blanco" name="blanco" id="blanco">blanco</option>
<option value="negro"name="negro" id="negro">oscuro</option>
<option value="rojo"name="rojo" id="rojo">rojo</option>
<option value="verde"name="verde" id="verde">verde</option>
<option value="azul"name="azul" id="azul">azul</option>
<option value="cian"name="cian" id="cian">cian</option>
<option value="amarillo"name="amarillo" id="amarillo">amarillo</option>
<option value="gris"name="gris" id="gris">gris</option>
</select>
</p>

<p>Color de texto
<select name="opcolortxt">
<option value="rojo"name="rojo" id="rojo">rojo</option>
<option value="verde"name="verde" id="verde">verde</option>
<option value="azul"name="azul" id="azul">azul</option>
<option value="cian"name="cian" id="cian">cian</option>
<option value="amarillo"name="amarillo" id="amarillo">amarillo</option>
<option value="gris"name="gris" id="gris">gris</option>
</select>
</p>
<p><input type="submit" name="enviar"></p>

</form>
</body>
</html>