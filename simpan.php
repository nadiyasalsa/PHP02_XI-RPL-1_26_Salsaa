<?php
include './koneksi.php';
echo "<a href='formulir.php'>Tambah data</a><br>";

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);
$a = 1;

while ($baris = mysqli_fetch_array($result)){
    echo "<br>";
    echo "$a";
    echo "<br";
    echo "nis : " . $baris[1] . "<br>";
    echo "nama_siswa : " . $baris[2] . "<br>";
    echo "jenis_kelamin : " . $baris[3] . "<br>";
    echo "alamat : " . $baris[4] . "<br>";
    echo "id jurusan : " . $baris[5] . "<br>";
    echo "<a href ='ubah_data.php?id_siswa=$baris[0]'>Ubah &nbsp</a>";
    echo "<a href='hapus.php?id_siswa=$baris[0]'>Hapus</a>";
    $a++;
}
$conn->close();
?>