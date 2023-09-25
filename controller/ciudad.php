<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");

class Ciudad {

    private $table = 'BDS_CIUDAD_SUCURSAL';
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

    public function Insert($COD_CIUDAD_SUCURSAL, $NOMBRE_CIUDAD, $COD_CALLE_SUCURSAL) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_CIUDAD_SUCURSAL, NOMBRE_CIUDAD, COD_CALLE_SUCURSAL) VALUES ('$COD_CIUDAD_SUCURSAL','$NOMBRE_CIUDAD','$COD_CALLE_SUCURSAL')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $NOMBRE_CIUDAD, $COD_CALLE_SUCURSAL) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET NOMBRE_CIUDAD = '$NOMBRE_CIUDAD', COD_CALLE_SUCURSAL = '$COD_CALLE_SUCURSAL' WHERE COD_CIUDAD_SUCURSAL = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_CIUDAD_SUCURSAL = '$id'");
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