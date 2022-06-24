<?php

namespace Models;
class Persona
{
    private $nombre;
    private $apellido;
    private $diaUsuario;
    private $mesUsuario;
    private $yearUsuario;
    private $edad;

    /**
     * @param $nombre
     * @return void
     */
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    /**
     * @return mixed
     */
    function getNombre()
    {
        return $this->nombre;
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

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getDiaUsuario()
    {
        return $this->diaUsuario;
    }

    /**
     * @param mixed $diaUsuario
     */
    public function setDiaUsuario($diaUsuario)
    {
        $this->diaUsuario = $diaUsuario;
    }

    /**
     * @return mixed
     */
    public function getMesUsuario()
    {
        return $this->mesUsuario;
    }

    /**
     * @param mixed $mesUsuario
     */
    public function setMesUsuario($mesUsuario)
    {
        $this->mesUsuario = $mesUsuario;
    }

    /**
     * @return mixed
     */
    public function getYearUsuario()
    {
        return $this->yearUsuario;
    }

    /**
     * @param mixed $yearUsuario
     */
    public function setYearUsuario($yearUsuario)
    {
        $this->yearUsuario = $yearUsuario;
    }

}

