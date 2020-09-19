<?php
    class Usuario{
        private $nombre;
        private $id;
        private $password;
        private $fecha_alta;
        private $foto;
  
        
        function __construct($nombre, $id, $password, $fecha_alta, $foto) {
            $this->nombre = $nombre;
            $this->id = $id;
            $this->password = $password;
            $this->fecha_alta = $fecha_alta;
            $this->foto = $foto;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getId() {
            return $this->id;
        }

        function getPassword() {
            return $this->password;
        }

        function getFecha_alta() {
            return $this->fecha_alta;
        }

        function getFoto() {
            return $this->foto;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setPassword($password) {
            $this->password = $password;
        }

        function setFecha_alta($fecha_alta) {
            $this->fecha_alta = $fecha_alta;
        }

        function setFoto($foto) {
            $this->foto = $foto;
        }


        
    }
?>


