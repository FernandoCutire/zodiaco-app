<?php

class Persona {
  private $nombre;
  private $fecha_nacimiento;
  private $edad;

  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }
  
  function get_nombre() {
    return $this->nombre;
  }

  function set_fecha($fecha_nacimiento) {
    $this->fecha_nacimiento = $fecha_nacimiento;
  }
  function get_fecha() {
    return $this->fecha_nacimiento;
  }

}

?>