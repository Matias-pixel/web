<?php
    include_once("Persona.php");

    class Alumno extends Persona 
    {
    
        private $matricula;
        private $carrera;

        public function __construct($rut,$nombre,$edad,$matricula, $carrera){
            parent::__construct($rut,$nombre,$edad);
            $this->matricula = $matricula;
            $this->carrera = $carrera;
            
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function getCarrera(){
            return $this->carrera;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function setCarrera($carrera){
            $this->carrera = $carrera;
        }
    }
    
?>