<?php
// memanggil koneksi
require 'requirements/koneksi.php';

?>

<html>
    <head>
        <title>Daftar Jurusan</title>
    </head>
    <link rel="stylesheet" href="assets/style.css">
</html>

<table>
    <thead>
        <th>No</th>
        <th>Nama Jurusan</th>
        <th>Aksi</th>
    </thead>
    <tbody>
    <?php
    $query = mysqli_query($koneksi, "select * from jurusan");
    $no = 1;
    while ($row = mysqli_fetch_object($query)) {
    ?>
    <tr>
        <td> <?= $no ?> </td>
        <td> <?= $row->nama_jurusan ?> </td>
        <td> <a href="detail.php?id=<?= $row->id?>"> Detail </a> </td>
    </tr>
    <?php 
    $no++;
    } ?>
    </tbody>
</table>