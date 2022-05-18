<?php

if(!isset($_COOKIE['contador'])){

setcookie('contador',1);

$mensaje="Bienvenido a nuestra página web";

}else{
setcookie('contador',$_COOKIE['contador'] +1);
$mensaje="Número de visitas: ".$_COOKIE['contador'];
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>

<title>Prueba de cookie</title>

</head>

<body>

<p>
    <?php
echo $mensaje;
?>
</p>

</body>

</html>