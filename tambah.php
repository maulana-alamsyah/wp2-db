<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h3>Form Mahasiswa</h3>
    <form action="" method="post">
        NIM : <input type="text" name="nim" id="nim">
        NAMA : <input type="text" name="nama" id="nama">
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['nim']) && !empty($_POST['nim'])){
    if(isset($_POST['nama']) && !empty($_POST['nama'])){
        $query = "INSERT INTO mahasiswa (nim, nama) VALUES ('" . $_POST['nim'] . "', '" . $_POST['nama'] . "');";

        $result = pg_affected_rows(pg_query($query));

        if($result == 1){
            echo '<script type="text/javascript">';
            echo 'alert("Data telah tersimpan");';
            echo 'window.location.href="index.php";';
            echo '</script>';
        }
    }
}
?>