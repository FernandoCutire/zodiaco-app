<?php





/*
$fechaRaiz="01/01/2000";
$fechausuario=$_POST['fecha'];
$nuevafecha=explode('/', $fechausuario);
$añousuario=$_POST['año'];
$datos=calcularTiempo($fechaRaiz, $fechausuario);



echo "dias entre las fechas ". $datos[11];
function calcularTiempo($fecha_inicio, $fecha_fin){
    $datetime1=date_create($fecha_inicio);
    $datetime2=date_create($fecha_fin);
    $interval=date_diff($datetime1, $datetime2);

$tiempo= array();

foreach($interval as $valor){
    $tiempo[]=$valo/r; 
}

    return $tiempo;
}
*/
  $diaUsuario=$_POST['dia'];
$mesUsuario=$_POST['mes'];
$anioUsuario=$_POST['anio'];
$edad=calcularedad($diaUsuario,$mesUsuario,$anioUsuario);

function calcularedad($dianac,$mesnac,$anionac){
$dia=date("d");
$mes=date("m");
$anio=date("Y");

if($mesnac>$mes){
    $edad=$anio-$anionac-1;
}else if($mes==$mesnac && $dianac>$dia){
    $edad=$anio-$anionac-1;

}else{
    $edad=$anio-$anionac;
}
return $edad;}
/*
function capricornio($dianac,$mesnac,$anionac){
    $dia=date("d");
    $mes=date("m");
    
$dia_inicial= date(24);
$dia_final= date(23);
$mes_inicial=date(9);
$mes_final=date(10);

    if($mesnac>=$mes_inicial && $dianac>=$dia_final ){
        $edad=$anio-$anionac-1;

}*/
echo "Tu edad es ".$edad. " años"



?>

  




