<?php
    include "koneksi.php";

    $nim    = $_POST["nim"];
    $nama   = $_POST["nama"];
    $prodi  = $_POST["prodi"];

    $query = "INSERT INTO mahasiswa (nim, nama, prodi)
            VALUES ('$nim', '$nama', '$prodi')";

    $result =mysqli_query($connection, $query); 
?>