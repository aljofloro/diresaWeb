<?php
  class Configuracion{
    private $bundle;
    private static $self = null;

    private function __construct(){
      $this->bundle = array();
    }

    public static function getConfiguracion(){
      if(!self::$self instanceof self){
        self::$self = new self();
      }
      return self::$self;
    }

    public function set($nombre,$valor){
      if(!isset($this->bundle[$nombre])){
        $this->bundle[$nombre] = $valor;
      }
    }

    public function get($nombre){
      if(isset($this->bundle[$nombre])){
        return $this->bundle[$nombre];
      }
    }
  }
?>