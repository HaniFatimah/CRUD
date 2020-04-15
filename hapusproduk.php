<?php
	include_once("koneksi.php");

	$id = $_GET['id'];

	$query = "DELETE FROM form_barang WHERE id_produk=$id";

	$hasil = mysqli_query($conn, $query);

	if ($hasil) {
		header("Location:index.php");
	}else{
		echo "Gagal Hapus Data";
	}
?>
