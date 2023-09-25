<?php
include_once("db.php");

class Auth {

    private $table = 'BDS_LOGIN';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new DB();
        $this->connection = $this->db->Connect();
    }

    public function Login($correo, $password) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE CORREO = '$correo' AND CONTRASEÑA = '$password'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        if ($row) {
            session_start();
            $_SESSION['CORREO'] = $row['CORREO'];
            $_SESSION['CONTRASEÑA'] = $row['CONTRASEÑA'];

            // $_SESSION['NOMBRE_TIPO_USUARIO'] = $row['NOMBRE_TIPO_USUARIO'];
            // $_SESSION['TIPO_USUARIO'] = $row['TIPO_USUARIO'];
            
            return true;
        } else {
            return false;
        }
    }

    public function Logout() {
        session_start();
        session_destroy();
    }
}

?>