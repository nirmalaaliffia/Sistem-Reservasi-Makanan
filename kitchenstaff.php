<?php 
require('koneksi.php');

if( isset($_GET['get_data']) ) {
    $sql    = "SELECT id_pesanan, id_user, jumlah_pesanan, user.no_meja AS no_meja, menu_makanan.nama_makanan AS nama_makanan FROM daftar_pesanan INNER JOIN user ON user.id_customer = daftar_pesanan.id_user INNER JOIN menu_makanan ON menu_makanan.id_menu = daftar_pesanan.id_makanan WHERE status_disajikan IS NULL OR status_disajikan = '0' ORDER BY id_pesanan DESC";
    $res    = $connect->query($sql);

    ob_start();

    if( $res->num_rows != 0 ) {
        $data_pesanan = array();
        while( $row = $res->fetch_object() ) {
            $makanan = array(
                'nama_makanan' => $row->nama_makanan,
                'jumlah_pesanan' => $row->jumlah_pesanan
            );
            if( ! isset($data_pesanan[$row->no_meja]) ) {
                $data_pesanan[$row->no_meja] = array(
                    'id_user' => $row->id_user,
                    'pesanan' => array()
                );
            }
            array_push($data_pesanan[$row->no_meja]['pesanan'], $makanan);
        }
        ?>
        <form id="form-kitchen" method="post">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Meja</th>
                    <th>Pesanan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data_pesanan as $k => $v) {
                echo "<tr>";
                echo "<td style=\"vertical-align:middle\"><input class=\"checkbox_id_user\" type=\"checkbox\" name=\"id_user[]\" value=\"" . $v['id_user'] . "\"></td>";
                echo "<td style=\"vertical-align:middle\">".$k."</td>";
                echo "<td>";
                $i = 0;
                foreach ($v['pesanan'] as $key => $value) {
                    echo ' [ ' . $value['jumlah_pesanan'] . ' ] ' . $value['nama_makanan'] . ' <br>';
                    $i++;
                }
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        <button type="submit" name="submit" class="btn btn-lg btn-primary">Konfirmasi</button>
        </form>
        <?php

    } else {
    ?>
    <div class="text-center"><h1>Belum Ada Pesanan</h1></div>
    <?php
    }

    $konten = ob_get_contents();
    ob_end_clean();

    $konten = preg_replace('/(\s+\s+)+/', '', $konten);
    $konten = preg_replace('/(\n)+/', '', $konten);
    
    echo $konten;

    exit();
}

if( isset($_POST['id_user']) ) {
    $id_user = $_POST['id_user'];
    if( is_array($id_user) ) {
        $sql = "";
        foreach ($id_user as $id) {
            $sql    .= "UPDATE daftar_pesanan SET status_disajikan = '1' WHERE id_user = '$id';";
        }
        $connect->multi_query($sql);
    } else {
        $sql = "UPDATE daftar_pesanan SET status_disajikan = '1' WHERE id_user = '$id_user'";
        $connect->query($sql);
    }
}

if( isset($_POST['id_pesanan']) ) {
    $id_pesanan = $_POST['id_pesanan'];
    if( is_array($id_pesanan) ) {
        $sql = "";
        foreach ($id_pesanan as $id) {
            $sql    .= "UPDATE daftar_pesanan SET status_disajikan = '1' WHERE id_pesanan = '$id';";
        }
        $connect->multi_query($sql);
    } else {
        $sql = "UPDATE daftar_pesanan SET status_disajikan = '1' WHERE id_pesanan = '$id_pesanan'";
        $connect->query($sql);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h1 class="text-center" style="padding: 20px;">PESANAN</h1>
            <div id="pesanan"></div>
        </div>
    </div>
</div>

<div id="sound"></div>

<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<script>
function playSound() {
    document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="oke.mp3" loop="false" type="audio/mpeg" /><embed hidden="true" autostart="true" loop="false" src="oke.mp3" /></audio>';
}
function getCurrentData() {
    return document.getElementById("pesanan").innerHTML;
}

function getCheckBox() {
    var checkedValue = $('.checkbox_id_user:checked').val();
    return checkedValue;
}

function getData() {
    $.get("?get_data=1", function(data, status){
        alert(data);
    });
}

function waitForMsg() {

    if( getCheckBox() != undefined ) {

    } else {

        $.ajax({
        type: "GET",
        url: "kitchenstaff.php?get_data=1",

        async: true,
        cache: false,
        timeout:50000,

        success: function(data){
        var currentData = getCurrentData();
        if(data != currentData){
            playSound();
        }
        
        $('#pesanan').html(data);

        },

        error: function(XMLHttpRequest, textStatus, errorThrown){
        setTimeout(
            waitForMsg,
            15000);
        }
        });

    }

};

$(document).ready(function(){
    setInterval(function(){ waitForMsg(); }, 1000);
});
</script>


<script>
$("#form-kitchen").submit(function(e) {

var url = "kitchenstaff.php";

$.ajax({
    type: "POST",
    url: url,
    data: $("#form-kitchen").serialize(),
    success: function(data)
    {
        alert('success');
    }
});

e.preventDefault();
return false;
});
</script>

</body>
</html>