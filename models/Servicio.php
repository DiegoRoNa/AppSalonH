<?php 

namespace Model;

class Servicio extends ActiveRecord{
    //TABLA DE LA BD CON LA QUE TRABAJA
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio'];

    public $id;
    public $nombre;
    public $precio;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }


    //VALIDACION DEL FORMULARIO PARA CREAR Y ACTUALIZAR 
    public function validar(){
        $expressions = [
            'nombre' => '/^[a-zA-ZÀ-ÿ\s]{1,60}$/'
        ];

        if (!$this->nombre) {
            self::$alertas['error'][] = 'Dale un nombre al servicio';
        }

        if (!preg_match($expressions['nombre'], $this->nombre)) {
            self::$alertas['error'][] = 'Coloca un nombre válido';
        }

        if (!$this->precio) {
            self::$alertas['error'][] = 'El servicio debe tener un precio';
        }
        
        if (!is_numeric($this->precio)) {
            self::$alertas['error'][] = 'El precio no es válido';
        }

        return self::$alertas;
    }
}
