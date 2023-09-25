<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");

class Calle {

    private $table = 'BDS_CALLE_DIRECCION_SUCURSAL';
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

    public function Insert($COD_CALLE_SUCURSAL, $NOMBRE_CALLE, $NRO_DIR) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_CALLE_SUCURSAL, NOMBRE_CALLE, NRO_DIR) VALUES ('$COD_CALLE_SUCURSAL','$NOMBRE_CALLE','$NRO_DIR')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $NOMBRE_CALLE, $NRO_DIR) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET NOMBRE_CALLE = '$NOMBRE_CALLE', NRO_DIR = '$NRO_DIR' WHERE COD_CALLE_SUCURSAL = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_CALLE_SUCURSAL = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE COD_CALLE_SUCURSAL  = '$id'");
        oci_execute($sql);
    }
}
?>