<?php
class menu{
   
    function __construct(){
        $this->connection = new ConnectionDB();
    }

    function addPesanan($id_user, $id_makanan, $jumlahpesanan, $hargamakanan, $metodepesanan){
       $hargapesanan=$jumlahpesanan*$hargamakanan;
        $sql="INSERT INTO `daftar_pesanan` (`id_pesanan`, `id_user`, `id_makanan`, `harga_pesanan`, `jumlah_pesanan`, `metode_pesanan`, `status_pembayaran`, `status_disajikan`) VALUES (NULL, $id_user, $id_makanan, $hargapesanan, $jumlahpesanan, '$metodepesanan', NULL, NULL);";
        $this->connection->conn->query($sql);
    }

    function deletePesanan($id_pesanan){
        $sql="DELETE FROM `daftar_pesanan` WHERE `daftar_pesanan`.`id_pesanan` = $id_pesanan";
        $this->connection->conn->query($sql);

    }

    function getIdPesanan($id_user, $id_makanan){
        $resultCol = array();
        $sql="SELECT `id_pesanan` FROM `daftar_pesanan` WHERE `id_user`=$id_user AND `id_makanan`=$id_makanan";
        

        $result = $this->connection->conn->query($sql);
        while($row = $result->fetch_assoc()){
            array_push($resultCol, $row['id_pesanan']);
        }
        $result = $resultCol[0];
        return $result;
    }

    function updateStatusPembayaran($idPesanan,$status){
        $sql = "UPDATE `daftar_pesanan` SET `status_pembayaran` = '$status' WHERE `daftar_pesanan`.`id_pesanan` = $idPesanan;";
        $this->connection->conn->query($sql);
      }
      function updateStatusDisajikan($idPesanan,$status){
        $sql = "UPDATE `daftar_pesanan` SET `status_disajikan` = '$status' WHERE `daftar_pesanan`.`id_pesanan` = $idPesanan;";
        $this->connection->conn->query($sql);
      }
      function getDaftarPesanan($idUser){
        $resultCol = array();
        $sql ="SELECT * FROM `daftar_pesanan` WHERE `id_user`=$id_user";
        $result = $this->connection->conn->query($sql);
          while($row = $result->fetch_assoc()){
            array_push($resultCol, new Pesanan($row['id_pesanan'],$row['id_user'],$row['id_makanan'],$row['harga_pesanan'],$row['jumlah_pesanan'],$row['metode_pesanan'],$row['status_pembayaran'],$row['status_disajikan']));
          }
          return $resultCol;
      }

      function getPesan(){
        $sql="SELECT `pesan` FROM `note_data` WHERE `waktu`=CURRENT_TIME AND `tanggal`=CURRENT_DATE";
        $this->connection->conn->query($sql);

      }
}

class Pesanan{
    function __construct($idPesanan,$idUser,$idMakanan,$hargaPesanan,$jumlahPesanan,$metodePesanan,$statusPembayaran,$statusDisajikan){
        $this->idPesanan = $idPesanan;
        $this->idUser = $idUser;
        $this->idMakanan = $idMakanan;
        $this->hargaPesanan = $hargaPesanan;
        $this->jumlahPesanan = $jumlahPesanan;
        $this->metodePesanan = $metodePesanan;
        $this->statusPembayaran = $statusPembayaran;
        $this->statusDisajikan = $statusDisajikan;
    }
}
?>