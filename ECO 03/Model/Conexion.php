<?php
class Conexion {
   public function conecta() {
        $enlace = mysqli_connect("localhost", "root", "", "bdproy");        
        if ($enlace->connect_error) {
            die("Conexión Fallada: " . $enlace->connect_error);
        }
       return $enlace;
        mysqli_close($enlace);
    }  
/* --------------------- Empleador ----------------------- */
   
    function LisE() {
        $vec = array();
        $sql = "select dni_empleador,nombre,apellido,email,contraseña,razon_social,RUC,telefono_empre,direccion_empre,tipo_industria,cant_empleados,fecha_creacion_empre from empleador ";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        while ($f = mysqli_fetch_array($res)) {
            $vec[] = $f;
        }
        return $vec;
    }
    /* --------------------- Postulante ----------------------- */
   
    function LisPos() {
        $vec = array();
        $sql = "select dni_postulante,nombre,apellido,email,contraseña,fecha_nac from postulante ";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        while ($f = mysqli_fetch_array($res)) {
            $vec[] = $f;
        }
        return $vec;
    }
}




?>