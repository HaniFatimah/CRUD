<?php
	include_once("koneksi.php");

	$kode = trim($_POST['txtKode']);
	$nama = $_POST['txtNama'];
	$harga = $_POST['txtHarga'];
	$satuan = $_POST['txtSatuan'];
	$kategori = $_POST['txtKategori'];
	$url = $_POST['txtGambar'];
	$stok = $_POST['txtStok'];

	$query = "INSERT INTO form_barang (kode_produk, nama_produk, harga, satuan, kategori, url_gambar, stok_awal) 
			VALUES ('$kode', '$nama', '$harga', '$satuan', '$kategori', '$url', '$stok')";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header('Location:index.php');
	}else{
		echo "Input Data Gagal";
	}
?>
