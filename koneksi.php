<?php
/* $host = 'john.db.elephantsql.com';
$port = 5432;
$username = 'postgres';
$password = 'rahasia';
$dbname = "test"; */

$conn_str = "host=john.db.elephantsql.com" .
    "port=5432" . 
    "user=rzplgiim" .
    "dbname=rzplgiim" . 
    "password=4xHyo6ImN0fpiWeTeah1B0JKfgDunNgb";

$conn = pg_connect($conn_str);

/* $con = pg_connect("host=$host user=$username password=$password dbname=$dbname"); */

if(!$conn){
    echo "gagal";
    die();
}else{
    echo "sukses";
}
?>