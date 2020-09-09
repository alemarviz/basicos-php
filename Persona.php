<?php
    # Clase Persona
    class Persona {
        private $nombre = "No asignado";
        private $correo = "No asignado";

        public function __construct($nombre, $correo) {
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        public function getNombre() {
            return $this->nombre;
        }
    }

    $p = new Persona("Luis", "luis@correo.es");
    print_r($p);
    echo "Nombre: {$p->getNombre()}";

?>