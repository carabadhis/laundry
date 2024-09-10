<?php
require 'koneksi.php';

$query = "DELETE FROM detail_transaksi WHERE id_transaksi = " . $_GET['id'];
$delete = mysqli_query($conn, $query);

if ($delete) {
    $_SESSION['msg'] = 'Berhasil Menghapus Data';
    header('location:transaksi.php');
} else {
    $_SESSION['msg'] = 'Gagal Hapus Data!!!';
    header('location:transaksi.php');
}
