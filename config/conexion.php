<?php 

class connect {

    protected $dbh;
    protected function Conexion(){

        try {

            $conectar = $this->dbh = new PDO("mysql:local=localhost;bdname=crud","root","");
            return $conectar;
            echo "¡Conexion....Éxito!";
        }catch(Excepcion $e ){
            print "¡Error DB!: " .$e->getMessage()."<br/>";
            die();
        }
    }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }


}

?>