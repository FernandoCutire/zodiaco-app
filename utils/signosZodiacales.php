<?php


function getAries($dianac, $mesnac, $aries)
{
    $dia_inicial = $aries['Dia_ini'];
    $dia_final = $aries['Dia_fin'];
    $mes_inicial = $aries['Mes_ini'];
    $mes_final = $aries['Mes_fin'];

    if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
        if ($dianac >= $dia_inicial || $dianac <= $dia_final)
            echo "Tu eres aries <br>";
    }

}

