<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");


class Insumo {

    private $table = 'BDS_INSUMO';
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

    public function Insert($COD_INSUMO, $NOMBRE_INSUMO, $CANTIDAD_INSUMO) {


        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_INSUMO, NOMBRE_INSUMO, CANTIDAD_INSUMO) VALUES ('$COD_INSUMO','$NOMBRE_INSUMO','$CANTIDAD_INSUMO')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $NOMBRE_INSUMO, $CANTIDAD_INSUMO) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET NOMBRE_INSUMO = '$NOMBRE_INSUMO', CANTIDAD_INSUMO = '$CANTIDAD_INSUMO' WHERE COD_INSUMO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_INSUMO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE COD_INSUMO  = '$id'");
        oci_execute($sql);
    }
}

?>