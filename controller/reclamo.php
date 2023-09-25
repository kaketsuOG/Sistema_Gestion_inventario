<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");

class RECLAMO {

    private $table = 'BDS_RECLAMO';
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

    public function Insert($COD_RECLAMO, $DETALLE_RECLAMO) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_RECLAMO, DETALLE_RECLAMO) VALUES ('$COD_RECLAMO','$DETALLE_RECLAMO')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $DETALLE_RECLAMO) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET DETALLE_RECLAMO = '$DETALLE_RECLAMO' WHERE COD_RECLAMO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_RECLAMO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE COD_RECLAMO  = '$id'");
        oci_execute($sql);
    }
}

?>