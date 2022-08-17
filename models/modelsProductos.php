<?php 

class ModelsProducto extends Conectar{
    public function get_producto(){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="select * from tm_producto";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }


    public function get_producto_x_id($prod_id){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="select * from tm_producto where prod_id = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$prod_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

}


?>