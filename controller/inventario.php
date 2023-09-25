<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");

class Inventario {

    private $table = 'BDS_INVENTARIO';
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

    public function Insert($COD_INVENTARIO, $CANTIDAD_INVENTARIO, $COD_INSUMO) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_INVENTARIO, CANTIDAD_INVENTARIO, COD_INSUMO) VALUES ('$COD_INVENTARIO','$CANTIDAD_INVENTARIO','$COD_INSUMO')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $CANTIDAD_INVENTARIO, $COD_INSUMO) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET CANTIDAD_INVENTARIO = '$CANTIDAD_INVENTARIO'= , COD_INSUMO = '$COD_INSUMO' WHERE COD_INVENTARIO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_INVENTARIO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE COD_INVENTARIO  = '$id'");
        oci_execute($sql);
    }
}

?>