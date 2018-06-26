<?php

class user{

    function __construct(){
        $this->connection = new ConnectionDB();
        echo 'berhasil';
    }

    function addUser($namacustomer, $nomeja){
        $sql="INSERT INTO `user` (`id_customer`, `nama_customer`, `no_meja`) VALUES (NULL, '$namacustomer', '$nomeja')";
		$this->connection->conn->query($sql);
    }

    function getUserId($namacustomer, $nomeja){
        $resultCol = array();
        $sql="SELECT `id_customer` FROM `user` WHERE `nama_customer`='$namacustomer' AND `no_meja`='$nomeja'";
        $result = $this->connection->conn->query($sql);
        while($row = $result->fetch_assoc()){
            array_push($resultCol, $row['id_customer']);
        }
        $result = $resultCol[0];
        return $result;
    }

}

?>