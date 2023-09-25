<?php
include_once($_SERVER['DOCUMENT_ROOT']."/Proyecto2/db.php");

class User {

    private $table = 'BDS_LOGIN';
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

    public function Insert($correo, $password) {
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (CORREO, CONTRASEÑA) VALUES ('$correo','$password')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $password) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET CONTRASEÑA = '$password' WHERE CORREO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE CORREO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE CORREO  = '$id'");
        oci_execute($sql);
    }
}

?>