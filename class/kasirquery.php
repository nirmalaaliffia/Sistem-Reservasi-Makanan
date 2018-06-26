<?php 
class kasir{
    function __construct(){
        $this->connection = new ConnectionDB();
    }

    function addNote($idkasir, $pesan, $tanggal){
        $sql="INSERT INTO `note_data` (`idkasir`, `iddata`, `pesan`, `tanggal`) VALUES ($idkasir, NULL, $pesan, $tanggal);";
        $this->connection->conn->query($sql);
    }


}


?>