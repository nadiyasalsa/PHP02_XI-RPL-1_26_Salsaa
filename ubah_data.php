<?php
    include "./koneksi.php";
    $id_siswa = $_GET["id_siswa"];

    $sql = "SELECT * FROM buku WHERE id_siswa=".$id_siswa;
    $result = $conn->query($sql);

    $result= $result->fetch_assoc();
?>

<form action="ubah.php" method="post">
    <input type="hidden" name="id_siswa" value="<?php echo $result['id_siswa']?>">
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo $result['nis']?>"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa" value="<?php echo $result['nama_siswa']?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $result['jenis_kelamin']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"><?php echo $result['alamat'];?></textarea></td>
        </tr>
        <tr>
            <td>Id Jurusan</td>
            <td>:</td>
            <td><input type="text" name="id_jurusan" value="<?php echo $result['id_jurusan']?>"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="UBAH">
</form>