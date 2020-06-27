<?php
include 'requirements/koneksi.php';

if($_GET['id']){
    $query = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id='$_GET[id]' limit 1") or die("Terdapat kesalahan.");
    
     // Patching 1 
     // Jika input hanya harus berupa angka
    // $id = (int) $_GET['id']; 
    // $query = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id='$id' limit 1");

    //  // Patching 2 
    //  // Jika input juga harus membutuhkan huruf, bisa dengan meng-escape inputan
    // $id = mysqli_escape_string($koneksi, $_GET['id']);
    // $query = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id='$id' limit 1");

    $row = mysqli_fetch_object($query);
}
?>
<html>
    <head>
        <title>Detail Jurusan <?= $row->nama_jurusan ?></title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <?php 
        if(isset($row) && $row != null){
        ?>
        <table>
        <tr>
            <td>Id</td>
            <td><?= $row->id ?></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td><?= $row->nama_jurusan ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="index.php">Kembali</a>
            </td>
        </tr>
    </table>

    <?php }else{ ?>

    <b>Data ini tidak tersedia dalam DB.</b>

    <?php  } ?>
    </body>
</html>