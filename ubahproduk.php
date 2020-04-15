<?php
	include_once("koneksi.php");

	$id = $_GET['id'];

	$query = "SELECT * FROM form_barang WHERE id_produk=".$id;

	$hasil = mysqli_query($conn, $query);
?>
	<center>
		<h2>Edit Produk</h2>

		<form method="post" action="proseseditproduk.php">

		<?php while ($data = mysqli_fetch_array($hasil)) {?>
			<table>
				<tr>
					<td>Kode Produk</td>
					<td><input type="text" name="txtKode" size="30px" value="<?php echo $data['kode_produk']?>"></td>
				</tr>

				<tr>
					<td>Nama Produk</td>
					<td><input type="text" name="txtNama" size="30px" value="<?php echo $data['nama_produk']?>"></td>
				</tr>

				<tr>
					<td>Harga Produk</td>
					<td><input type="text" name="txtHarga" size="30px"  value="<?php echo $data['harga']?>"></td>
				</tr>

				<tr>
           			 <td>Satuan</td>
              		 <td>
              	 	 <select name="txtSatuan" style="width: 100%"  value="<?php echo $data['satuan']?>">
                     <option value="null">Pilih Satuan</option>
                     <option value="Gelas">Gelas</option>
                     <option value="Piring">Box</option>
                     <option value="Makanan">Piring</option>
                 	 </select>
             		 </td>
        		</tr>

				<tr>
           			 <td>Kategori</td>
           			 <td>
           		     <select name="txtKategori" style="width: 100%"  value="<?php echo $data['kategori']?>">
                     <option value="null">Pilih Kategori</option>
                     <option value="Minuman Dingin">Minuman Dingin</option>
                     <option value="Makanan">Makanan Hangat</option>
                     <option value="Snack">Snack</option>
               		 </select>
            		</td>
        		</tr>

				<tr>
					<td>URL Gambar</td>
					<td><input type="url" name="txtGambar" size="30px"  value="<?php echo $data['url_gambar']?>"></td>
				</tr>

				<tr>
					<td>Stok Awal</td>
					<td><input type="text" name="txtStok" size="30px"  value="<?php echo $data['stok_awal']?>"></td>
				</tr>

				<tr>
					<td> </td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id_produk']?>" >
						<input type="submit" value="Edit Data">
					</td>
				</tr>
			</table>
			<?php }?>
		</form>
		</center>
