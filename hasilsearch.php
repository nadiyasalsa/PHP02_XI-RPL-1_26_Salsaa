<?php
    $kolom=$_POST['kolom'];
    $cari =$_POST['cari'];
    $link = mysqli_connect("localhost","root","","siswa");
    $hasil = mysqli_query($link,"select * from buku where $kolom like '%$cari%'");
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah";
    echo "<br>";
    while ($baris=mysqli_fetch_array($hasil))
    {
        echo "nis :";
        echo $baris[1];
        echo "</br>" ;
        echo "nama_siswa :";
        echo $baris[2];
        echo "</br>" ;
        echo "jenis_kelamin :";
        echo $baris[3];
        echo "</br>" ;
        echo "alamat :";
        echo $baris[4];
        echo "</br>" ;
        echo "id_jurusan :";
        echo $baris[5];
        echo "</br>" ;
    }
?>