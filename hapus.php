<?php
//echo $_GET['nim'];
require_once('koneksi.php');

$sql = "delete from mahasiswa where nim='" . $_GET['nim'] . "'";
$result = pg_query($sql);

$jumlah = pg_affected_rows($result);

if($jumlah > 0){
    echo '<script type="text/javascript">';
    echo 'alert("Data telah terhapus");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
}else{
    echo '<script type="text/javascript">';
    echo 'alert("Data gagal dihapus");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
}

?>