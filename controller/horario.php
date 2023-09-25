<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");

class Horario {

    private $table = 'BDS_HORARIO';
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

    public function Insert($COD_HORARIO, $NOMBRE_HORARIO, $COD_USUARIO, $FECHA) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_HORARIO, NOMBRE_HORARIO, COD_USUARIO, FECHA) VALUES ('$COD_HORARIO','$NOMBRE_HORARIO','$COD_USUARIO','$FECHA')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $NOMBRE_HORARIO, $COD_USUARIO, $FECHA) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET NOMBRE_HORARIO = '$NOMBRE_HORARIO', COD_USUARIO = '$COD_USUARIO', FECHA=$FECHA WHERE COD_HORARIO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_HORARIO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE COD_HORARIO  = '$id'");
        oci_execute($sql);
    }
}

?>