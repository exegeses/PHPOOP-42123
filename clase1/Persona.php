<?php

    class Persona
    {
        ## atributos o propiedades
        private $nombre;
        private $apellido;

        ## métodos
        public function verDatos()
        {
            return 'Datos de persona';
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }
        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre): void
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getApellido()
        {
            return $this->apellido;
        }
        /**
         * @param mixed $apellido
         */
        public function setApellido($apellido): void
        {
            $this->apellido = $apellido;
        }


    }
