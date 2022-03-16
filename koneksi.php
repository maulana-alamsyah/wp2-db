<?php
$conn_str = "host=john.db.elephantsql.com " .
    "port=5432 " .
    "user=rzplgiim " .
    "dbname=rzplgiim " .
    "password=4xHyo6ImN0fpiWeTeah1B0JKfgDunNgb";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>