<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");


class Nro {

    private $table = 'BDS_NRO_DIRECCION_SUCURSAL';
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

    public function Insert($NRO_DIR, $NRO_DIRECCION) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (NRO_DIR, NRO_DIRECCION) VALUES ('$NRO_DIR','$NRO_DIRECCION')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $NRO_DIRECCION) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET NRO_DIRECCION = '$NRO_DIRECCION' WHERE NRO_DIR = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE NRO_DIR = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE NRO_DIR  = '$id'");
        oci_execute($sql);
    }
}
?>