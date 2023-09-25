<?php

class DB {

   public $username = 'admin';
   public $password = 'admin';
   public $post = 'localhost:1521/xe';

   public function Connect() {
      $conn = oci_connect($this->username, $this->password, $this->post, 'AL32UTF8');
      if (!$conn) {
         $m = oci_error();
         echo "ERROR! => ".$m['message'], "\n";
         exit;
      }
      return $conn;
   }
}

?>