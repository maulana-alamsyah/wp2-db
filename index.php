<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<h3>Data Mahasiswa</h3>
<br>
<a href="tambah.php">Tambah</a>
<br>

<table>
    <thead>
        <td>ID</td>
        <td>NIM</td>
        <td>NAMA</td>
    </thead>
    <tbody>
        <?php

        $query = "SELECT * FROM mahasiswa;";

        $result = pg_query($query);

        while ($row = pg_fetch_object($result)) {
            echo "<tr>
                    <td> $row->id </td>
                    <td> $row->nim </td>
                    <td> $row->nama </td>
                </tr>";
        }

        ?>
    </tbody>
</table>
    
</body>
</html>