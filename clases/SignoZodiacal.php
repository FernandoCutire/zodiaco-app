<?php

class SignoZodiacal
{
    private $signoZodiacal;
    private $lectura;
    private $nombreCaballero;
    private $imagen;
    private $descCaballero;
    private $fuente;

    // Diferentes signos zodiacales
    public $aries = array("Signo" => "Aries",
        "FechaLarga" => "21 de Marzo al 19 de Abril",
        "Lectura" => "Este día te traerá la posibilidad de dedicarte a cosas que a diario te interesan mucho y para las que no siempre tienes tiempo. Tal vez te decidas hoy a leer un libro, a estudiar o a poner sobre el papel algún proyecto de los que te rondan por la cabeza desde hace tiempo."
    , "NCaballero" => "Mu de Aries"
    , "DesCaballero" => "Es telépata y telequinético. Conocido por tener los poderes mentales más fuertes entre los 12 Santos de Oro, el mismo Aioria lo admite en su pelea contra los Espectros en la Casa de Leo. El Santo de Aries es un increíble manipulador de la teletransportación, con poder suficiente para transportarse el mismo o a varias personas a lugares muy lejanos, incluso otras dimensiones."
    , "Imagen" => "./imagenes/caballeros/Mu_Aries-zodiaco.jpg",
        "Fuente" => "https://es.wikipedia.org/wiki/Mu_de_Aries#Habilidades"
    , "Dia_ini" => "21", "Dia_fin" => "19", "Mes_ini" => "3", "Mes_fin" => "4");


    /**
     * @return mixed
     */
    public function getNombreCaballero()
    {
        return $this->nombreCaballero;
    }

    /**
     * @param mixed $nombreCaballero
     */
    public function setNombreCaballero($nombreCaballero)
    {
        $this->nombreCaballero = $nombreCaballero;
    }

    /**
     * @return mixed
     */
    public function getSignoZodiacal()
    {
        return $this->signoZodiacal;
    }

    /**
     * @param mixed $signoZodiacal
     */
    public function setSignoZodiacal($signoZodiacal)
    {
        $this->signoZodiacal = $signoZodiacal;
    }

    /**
     * @return mixed
     */
    public function getDescCaballero()
    {
        return $this->descCaballero;
    }

    /**
     * @param mixed $descCaballero
     */
    public function setDescCaballero($descCaballero)
    {
        $this->descCaballero = $descCaballero;
    }


    /**
     * @return mixed
     */
    public function getLectura()
    {
        return $this->lectura;
    }

    /**
     * @param mixed $lectura
     */
    public function setLectura($lectura)
    {
        $this->lectura = $lectura;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getFuente()
    {
        return $this->fuente;
    }

    /**
     * @param mixed $fuente
     */
    public function setFuente($fuente)
    {
        $this->fuente = $fuente;
    }

    // Funciones de desarrollo
    public function getZodiaco($dUsr, $mUsr)
    {
        $this->getAries($dUsr, $mUsr, $this->aries);
    }

    // Obtener Signos zodiacales

    function getAries($dianac, $mesnac, $aries)
    {
        $dia_inicial = $aries['Dia_ini'];
        $dia_final = $aries['Dia_fin'];
        $mes_inicial = $aries['Mes_ini'];
        $mes_final = $aries['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dianac >= $dia_inicial || $dianac <= $dia_final)
                $this->setSignoZodiacal($aries['Signo']);
                $this->setNombreCaballero($aries['NCaballero']);
                $this->setLectura($aries['Lectura']);
                $this->setDescCaballero($aries['DesCaballero']);
                $this->setFuente($aries['Fuente']);
                $this->setImagen($aries['Imagen']);
        }
    }



}


