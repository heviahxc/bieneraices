<?php

namespace App;

class Propiedad{
    public $id_propiedad;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamientos;
    public $creado;
    public $id_vendedor;

    public function __construct($arg = []){

        $this->id_propiedad = $arg['id_propiedad'] ?? '';
        $this->titulo = $arg['titulo'] ?? '';
        $this->precio = $arg['precio'] ?? '';
        $this->imagen = $arg['imagen'] ?? '';
        $this->descripcion = $arg['descripcion'] ?? '';
        $this->habitaciones = $arg['habitaciones'] ?? '';
        $this->wc = $arg['wc'] ?? '';
        $this->estacionamientos = $arg['estacionamientos'] ?? '';
        $this->creado = date('Y/m/d');
        $this->id_vendedor = $arg['id_vendedor'] ?? '';
    }

    public function save(){

    }
}