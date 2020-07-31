<?php
session_start();

$konek = mysqli_connect("localhost", "root", "", "db_klinik");
if ($_GET['act'] == 'bayar') {

    $ID_TRANSAKSI     = $_GET['id'];
    $ID_PASIEN    = $_GET['ID_PASIEN'];

    //membuat nomor pembayaran
    $today = date("ymd");
    $konek = mysqli_connect("localhost", "root", "", "db_klinik");
    $query = mysqli_query($konek, "SELECT max(ID_PELAYANAN) AS last FROM transaksi WHERE ID_PELAYANAN LIKE '$today%'");
    $data = mysqli_fetch_array($query);
    $lastIDPelayanan    = $data['last'];
    $lastNoUrut        = substr($lastIDPelayanan, 6, 4);
    $nextNoUrut        = $lastNoUrut + 1;
    $nextIDPelayanan    = $today . sprintf('%04s', $nextNoUrut);

    //tanggal Bayar
    $tglTransaksi     = date('Y-m-d');

    //id admin


    mysqli_query($konek, "UPDATE transaksi SET ID_PELAYANAN='$nextIDPelayanan',
											TANGGAL_TRANSAKSI='$tglTransaksi',
											KET='LUNAS'
									WHERE ID_TRANSAKSI='$ID_TRANSAKSI'");

    header('location:transaksi.php?ID_PASIEN=' . $ID_PASIEN);
}
