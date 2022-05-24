<?php
    class Persona 
    {
        protected $rut;
        protected $nombre;
        protected $edad;


        public function __construct($rut,$nombre,$edad){
            $this->rut = $rut;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function getNombre(){
            return $this->rut;
        }

        public function getRut(){
            return $this->nombre;

        }

        public function getEdad(){
            $this->edad;
        }

        public function setRut($rut){
            $this->rut = $rut;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function saludar(){
            echo "hola, mi nombre es: ", $this->nombre, "y mi edad es: ", $this-> edad;;
        }


    }
    


?>