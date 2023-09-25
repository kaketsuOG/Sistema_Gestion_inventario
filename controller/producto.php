<?php
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");


class Producto {

    private $table = 'BDS_PRODUCTOS';
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

    public function Insert($COD_PRODUCTO, $NOMBRE_PRODUCTO, $CANTIDAD_DISPONIBLE, $VALOR_PRODUCTO, $COD_CATEGORIA) {

        $FOTO = $_FILES['IMAGEN_PRODUCTO']['name'];
		$ubicacion = "../img/productos/".$FOTO;
		move_uploaded_file($_FILES['IMAGEN_PRODUCTO']['tmp_name'], $ubicacion);

        $sql = oci_parse($this->connection,"INSERT INTO $this->table (COD_PRODUCTO, NOMBRE_PRODUCTO, CANTIDAD_DISPONIBLE, VALOR_PRODUCTO, IMAGEN_PRODUCTO, COD_CATEGORIA) VALUES ('$COD_PRODUCTO','$NOMBRE_PRODUCTO','$CANTIDAD_DISPONIBLE','$VALOR_PRODUCTO','$FOTO','$COD_CATEGORIA')");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Update($id, $NOMBRE_PRODUCTO, $CANTIDAD_DISPONIBLE, $VALOR_PRODUCTO, $COD_CATEGORIA) {
        $sql = oci_parse($this->connection,"UPDATE $this->table SET NOMBRE_PRODUCTO = '$NOMBRE_PRODUCTO', CANTIDAD_DISPONIBLE = '$CANTIDAD_DISPONIBLE', VALOR_PRODUCTO = '$VALOR_PRODUCTO', COD_CATEGORIA = '$COD_CATEGORIA' WHERE COD_PRODUCTO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Show($id) {
        $sql = oci_parse($this->connection,"SELECT * FROM $this->table WHERE COD_PRODUCTO = '$id'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Delete($id) {
        $sql = oci_parse($this->connection,"DELETE FROM $this->table WHERE COD_PRODUCTO  = '$id'");
        oci_execute($sql);
    }
}

?>