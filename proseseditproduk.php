<?php
	include_once("koneksi.php");

	$id = $_POST['id'];
	$kode = trim($_POST['txtKode']);
	$nama = $_POST['txtNama'];
	$harga = $_POST['txtHarga'];
	$satuan = $_POST['txtSatuan'];
	$kategori = $_POST['txtKategori'];
	$url = $_POST['txtGambar'];
	$stok = $_POST['txtStok'];

	$query = "UPDATE form_barang SET kode_produk='$kode', nama_produk='$nama', harga='$harga', satuan='$satuan',
	 kategori='$kategori' , url_gambar='$url', stok_awal='$stok' WHERE id_produk=$id";


	 $hasil = mysqli_query($conn, $query);

	 if ($hasil) {
	 	header('Location:index.php');
	 }else{
	 	echo "Edit Data Gagal";
	 }
?>
