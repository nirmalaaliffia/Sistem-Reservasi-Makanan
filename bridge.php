<?php 
require_once('classes.php');
$menuquery = new menu();
$menuquery->addPesanan($_GET['userId'],$_GET['idMakanan'],$_GET['jumlah_pesanan'],$_GET['hargaMakanan'],$_GET['metode']);
header("location:invoice.php?metode=".$_GET['metode']."&userId=".$_GET['userId']);

?>