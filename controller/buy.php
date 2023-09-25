<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT']."/proyecto2/db.php");


class Buy {

    private $table = 'BDS_BUY';
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

    public function Insert($TOTAL, $FECHA) {

        /* REVISAR PARA QUE RETORNE EL AUTOINCREMENTABLE */
        $sql = oci_parse($this->connection,"INSERT INTO $this->table (USUARIO, TOTAL, FECHA) VALUES ('".$_SESSION['CORREO']."','$TOTAL','$FECHA')");
        oci_execute($sql);

        $row = oci_fetch_array($sql);
        return $row;
    }

    public function Detail($COD_BUY,$COD_PRODUCTO,$PRECIO,$CANTIDAD,$SUBTOTAL) {

        $sql = oci_parse($this->connection,"INSERT INTO BDS_BUY_DETALLE (COD_BUY, COD_PRODUCTO, PRECIO, CANTIDAD, SUBTOTAL) VALUES ('$COD_BUY','$COD_PRODUCTO','$PRECIO','$CANTIDAD','$SUBTOTAL')");
        oci_execute($sql);

        $update_stock = oci_parse($this->connection,"UPDATE BDS_PRODUCTOS SET CANTIDAD_DISPONIBLE = CANTIDAD_DISPONIBLE - '$CANTIDAD' WHERE COD_PRODUCTO = '$COD_PRODUCTO'");
        oci_execute($update_stock);
        return true;
    }

    public function Search($codigo) {
        $sql = oci_parse($this->connection,"SELECT * FROM BDS_PRODUCTOS WHERE COD_PRODUCTO = '$codigo'");
        oci_execute($sql);
        $row = oci_fetch_array($sql);
        return $row;
    }
}

?>