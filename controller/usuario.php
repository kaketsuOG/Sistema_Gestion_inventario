<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");

class Usuario {

    private $table = 'BDS_USUARIO';
    private $db;
    private $connection;

    public function __construct()
    {
        $this->db = new DB();
        $this->connection = $this->db->Connect();
    }

    public function Index() {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table");
        oci_execute($sql);
        $data = [];
        while ($row = oci_fetch_array($sql)) {
            array_push($data, $row);
        }
        return $data;
    }

    public function Insert($COD_USUARIO, $NOMBRE_USUARIO, $COD_ROL, $APELLIDO_USUARIO, $RUT_USUARIO, $CORREO) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_USUARIO, NOMBRE_USUARIO, COD_ROL, APELLIDO_USUARIO, RUT_USUARIO, CORREO) VALUES ('$COD_USUARIO','$NOMBRE_USUARIO','$COD_ROL','$APELLIDO_USUARIO','$RUT_USUARIO','$CORREO')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $NOMBRE_USUARIO, $COD_ROL, $APELLIDO_USUARIO, $RUT_USUARIO, $CORREO) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET NOMBRE_USUARIO = '$NOMBRE_USUARIO'= , COD_ROL = '$COD_ROL'=, APELLIDO_USUARIO = '$APELLIDO_USUARIO'=, RUT_USUARIO = '$RUT_USUARIO', CORREO = '$CORREO' WHERE COD_USUSARIO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_USUARIO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE COD_USUARIO  = '$id'");
        oci_execute($sql);
    }
}

?>