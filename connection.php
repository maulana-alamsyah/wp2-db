<?php
$host = 'localhost';
$port = 5432;
$username = 'postgres';
$password = 'rahasia';
$dbname = "test";

$con = pg_connect("host=$host user=$username password=$password dbname=$dbname");

if(!$con){
    echo "gagal";
    die();
}else{
    echo "sukses";
}
?>