<?php
/*SE GUARDA EN VARIABLES LO QUE LLENO DEL FORMS EL USUARIO*/
$diaUsuario = $_POST['dia'];
$mesUsuario = $_POST['mes'];
$anioUsuario = $_POST['anio'];

/*LLAMADO A LAS FUNCIONES DE EDAD Y SIGNO*/
$edad = calcularedad($diaUsuario, $mesUsuario, $anioUsuario);
$signo = capricornio($diaUsuario, $mesUsuario);

/*FUNCION PARA SACAR LA EDAD DEL USUARIO*/
function calcularedad($dianac, $mesnac, $anionac)
{
//CON DATE SE SACA LA FECHA ACTUAL, SE COLOCO EN DIA MES Y AÑO AL FINAL SE COMPARA
    $dia = date("d");
    $mes = date("m");
    $anio = date("Y");
//SI EL MES DE NACIMIENTO ES MAYOR QUE EL MES ACTUAL(MARZO) SE LE RESTA UN AÑO 
    if ($mesnac > $mes) {
        $edad = $anio - $anionac - 1;

        //SI EL MES ACTUAL ES IGUAL AL MES ACTUAL Y EL DIA DE NACIMIENTO ES MAYOR AL DIA ACTUAL SE RESTA TAMBIEN UN AÑO LA EDAD (NO HA CUMPLIDO AUN)
    } else if ($mes == $mesnac && $dianac > $dia) {
        $edad = $anio - $anionac - 1;
//EN EL ELSE ENTONCES SE SUPONE QUE YA CUMPLIO AÑOS Y LA DIFERENCIAS EN EL AÑO DE NACMIENTO CON EL ACTUAL DA LA EDAD
    } else {
        $edad = $anio - $anionac;
    }
    return $edad;
}

function capricornio($dianac, $mesnac)
{
    //SE CARGA LAS VARIABLES DE LO QUE VA CAPRICORNIO QUE ES DE 22 DE DICIEMBRE AL 20 DE ENERO SOLO SE MANEJA DIA Y MES
    $dia_inicial = "22";
    $dia_final = "20";
    $mes_inicial = "12";
    $mes_final = "1";
//SE EVALUA SI EL MES DE NACIMIENTO ES DICIEMBRE O ENERO
    if ($mesnac === 12 || $mesnac === 1) {
        //SE EVALUA SI EL DIA DE NACIMIENTO ES MAYOR AL DIA 22 O SI EL DIA ES MENOR QUE EL DIA 20 DE ENERO
        if ($dianac >= 22 || $dianac <= 20)
           $resp = "Tu eres capricornio <br>";
    } if ($mesnac === 12 || $mesnac === 1) {
    //SE EVALUA SI EL DIA DE NACIMIENTO ES MAYOR AL DIA 22 O SI EL DIA ES MENOR QUE EL DIA 20 DE ENERO
    if ($dianac >= 22 || $dianac <= 20)
        $resp = "Tu eres capricornio <br>";
}

else {
        echo "eres otro signo <br>";

    }

}

echo "Tu edad es " . $edad . " años <br>";


?>

  




