<?php

class signoZodiacales {
  private $signoZodiacal;
  private $nombreCaballero;
  private $lectura;
  private $descCaballero;

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
}

?>