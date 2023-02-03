<?php

namespace App;

class Propiedad{

    protected static $db;
    protected static $columnasDB = ['id_propiedad', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamientos', 'id_vendedor'];

    protected static $errores = [];




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
        $this->id_vendedor = $arg['id_vendedor'] ?? 1;
    }

    public function save(){

        $atributos = $this->sanitizarAtributos();

        $query = " INSERT INTO propiedad (";
        $query .= join(',', array_keys($atributos));
        $query .= ") VALUES ( '"; 
        $query .= join("','", array_values($atributos));
        $query.= "')";

        $resultado = self::$db->query($query);

        return $resultado;
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

    public function setImagen($imagen){
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    public static function getErrores(){
        return self::$errores;
    }

    public function validar(){


        if(!$this->titulo){
            self::$errores[] = "Debes añadir un titulo";
        }
    
        if(!$this->precio){
            self::$errores[] = "Debes añadir un precio";
        }
    
        if(strlen($this->descripcion) < 50){
            self::$errores[] = "Debes añadir una descripcion de al menos 50 caracteres";
        }
    
        if(!$this->habitaciones){
            self::$errores[] = "Debes añadir numero de habitaciones";
        }
    
        if(!$this->wc){
            self::$errores[] = "Debes añadir numero de baños";
        }
    
        if(!$this->estacionamientos){
            self::$errores[] = "Debes añadir numero de estacionamientos";
        }
    
        if(!$this->id_vendedor){
            self::$errores[] = "Debes elegir un vendedor";
        }
        if (!$this->imagen) {
            self::$errores[] = "La imagen es obligatoria";
        }

        return self::$errores;
    }

    public static function all(){
        $query = "SELECT * FROM propiedad;";

        $resultado = self::consultarSQL($query);

        return $resultado;


    }

    public static function consultarSQL($query){

        $resultado = self::$db->query($query);

        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = self::crearObjeto($registro);
        }

        $resultado->free();

        return $array;

    }

    protected static function crearObjeto($registro){

        $objeto = new self;

        foreach($registro as $key => $value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }

        return $objeto;
    }

   
}