<?php

class Persona
{
    private $nombre;
    private $diaUsuario;
    private $mesUsuario;
    private $anioUsuario;
    private $edad;

    function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }


    function get_nombre()
    {
        return $this->nombre;
    }

    function set_fecha($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function get_fecha()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    // Funciones de desarrollo

    /**
     * @param $dNac
     * @param $mNac
     * @param $aNac
     * @return void
     */
    public function calcularedad($dNac, $mNac, $aNac)
    {
        $dia = date("d");
        $mes = date("m");
        $anio = date("Y");

        if ($mNac > $mes) {
            $edad = $anio - $aNac - 1;
        } else if ($mes == $mNac && $dNac > $dia) {
            $edad = $anio - $aNac - 1;
        } else {
            $edad = $anio - $aNac;
        }
        $this->setEdad($edad);
    }

}

?>