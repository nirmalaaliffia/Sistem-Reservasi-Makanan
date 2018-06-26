<?php
  class ConnectionDb{
    function __construct(){
      $this->servername = "localhost";
      $this ->username = "root";
      $this ->password = "";
      $this->conn = new mysqli($this->servername, $this->username, $this->password, 'arjeskitchen3');
    }
  }
 ?>
 
