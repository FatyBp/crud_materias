<?php
        class Conexion{
            public function conectar(){
                $servidor = "localhost";
                $usuario = "root";
                $password = "";
                $bd = "materias" ;

                $conexion = new mysqli($servidor,$usuario, $password, $bd);

                return $conexion;
            }
        }
        // if (Conexion::conectar()) {
        //     echo "V";
        // }
    ?>