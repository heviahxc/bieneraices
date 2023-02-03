<?php

namespace App;

class Propiedad{

    protected static $db;
    protected static $columnasDB = ['id_propiedad', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamientos', 'id_vendedor'];
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
    public static function setDB($database){
        self::$db = $database;
    }
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

        $atributos = $this->sanitizarAtributos();

        $query = " INSERT INTO propiedad (titulo, precio, imagen, descripcion, habitaciones, wc , estacionamientos, creado, id_vendedor)
        VALUES ('$this->titulo', '$this->precio','$this->imagen','$this->descripcion', '$this->habitaciones', '$this->wc', '$this->estacionamientos', '$this->creado' ,'$this->id_vendedor')";

        $resultado = self::$db->query($query);


    }
    public function atributos(){
        $atributos = [];

        foreach (self::$columnasDB as $columna) {
            if($columna === 'id_propiedad') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }
    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }

        return $sanitizado;
    }
   
}