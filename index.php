<?php
	include_once("koneksi.php");
	$query = 'SELECT * FROM form_barang' ;

	$hasil = mysqli_query($conn, $query);


?>

<html>
	<head>
		<title>Data Produk</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<center>
			<h2>FORM PRODUK</h2>
			
				<a href="tambahproduk.php">Tambah Produk</a>
			<br>
			<form>
				<table border="1" width="1000px">
					<tr>
						<th>NO</th>
						<th>Kode Produk</th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Satuan</th>
						<th>Kategori</th>
						<th>URL Gambar</th>
						<th>Stok Awal</th>
						<th>Aksi</th>
					</tr>
					
					<?php
					$nomor=1;
					while ($data = mysqli_fetch_array($hasil)) {
						
					 ?>
					<tr>
						<td align="center"> <?php echo $nomor; ?> </td>
						<td align="center"> <?php echo $data['kode_produk']; ?></td>
						<td align="center"> <?php echo $data['nama_produk']; ?></td>
						<td align="center"> <?php echo $data['harga']; ?></td>
						<td align="center"> <?php echo $data['satuan']; ?></td>
						<td align="center"> <?php echo $data['kategori']; ?></td>
						<td align="center"> <img src="<?php echo $data['url_gambar'];?>" alt='' height='50' width='50'> </td>

						<td align="center" id="stok_awal" class="
							<?php 
								if ($data['stok_awal']< 5) {
									echo "alert";
								}else{
									echo "none";
								}
							?>">
							
							<?php echo $data['stok_awal']; ?>
						</td>
						<td align="center">
							<a href="ubahproduk.php?id=<?php echo $data['id_produk'] ?>">Edit</a>
							<a href="hapusproduk.php?id=<?php echo $data['id_produk'] ?>"
								onclick="return confirm('Apakah anda yakin akan menghapus data produk ini?')">Delete</a>
						</td>
					</tr>

				<?php $nomor++; } ?>

				</table>
			</form>
		</center>
	</body>
</html>
