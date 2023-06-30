
</*?php 
    Class Conexion{
        public $servidor = '127.0.0.1';
        public $usuario = 'root';
        public $password = '';
        public $database ='sgd_database';
        public $puerto = 3306;

        public function conectar(){
            return mysqli_connect(
                $this->servidor, 
                $this->usuario,
                $this->password,
                $this->database,
                $this->puerto 
            );


        }


    }
?> */


<?php 
    Class Conexion{
        public $servidor = 'localhost:330';
        public $usuario = 'root';
        public $password = 'root1234';
        public $database ='sgd_database';
        public $puerto = 330;

        public function conectar(){
            return mysqli_connect(
                $this->servidor, 
                $this->usuario,
                $this->password,
                $this->database,
                $this->puerto 
            );
        }
    }
?>
