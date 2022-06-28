<?php
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "restaurant";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

	//jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		//Pengujian Apakah data akan diedit atau disimpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan di edit
			$edit = mysqli_query($koneksi, "UPDATE menu set
											 	idmenu = '$_POST[tid]',
											 	namamenu = '$_POST[tnama]',
												harga = '$_POST[tharga]'
											 WHERE idmenu = '$_GET[id]'
										   ");
			if($edit) //jika edit sukses
			{
				echo "<script>
						alert('Edit data suksess!');
						document.location='homeCRUD.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Edit data GAGAL!!');
						document.location='homeCRUD.php';
				     </script>";
			}
		}
		else
		{
			//Data akan disimpan Baru
			$simpan = mysqli_query($koneksi, "INSERT INTO menu (idmenu, namamenu, harga)
										  VALUES ('$_POST[tid]', 
										  		 '$_POST[tnama]', 
										  		 '$_POST[tharga]')
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='homeCRUD.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='homeCRUD.php';
				     </script>";
			}
		}


		
	}


	//Pengujian jika tombol Edit / Hapus di klik
	if(isset($_GET['hal']))
	{
		//Pengujian jika edit Data
		if($_GET['hal'] == "edit")
		{
			//Tampilkan Data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM menu WHERE idmenu = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$vid = $data['idmenu'];
				$vnama = $data['namamenu'];
				$vharga = $data['harga'];
			}
		}
		else if ($_GET['hal'] == "hapus")
		{
			//Persiapan hapus data
			$hapus = mysqli_query($koneksi, "DELETE FROM menu WHERE idmenu = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='homeCRUD.php';
				     </script>";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Indigo Grill Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<h1 class="text-center">Selamat Datang Admin</h1>
	<h2 class="text-center">Halaman CRUD</h2>

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Daftar Menu
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>ID</label>
	    		<input type="text" name="tid" value="<?=@$vid?>" class="form-control" placeholder="Input ID Menu disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama Menu disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Harga</label>
	    		<textarea class="form-control" name="tharga"  placeholder="Input Harga Menu disini!"><?=@$vharga?></textarea>
	    	</div>

	    	<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

	    </form>
	  </div>
	</div>
	<!-- Akhir Card Form -->

	<!-- Awal Card Tabel -->
	<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    Daftar Menu
	  </div>
	  <div class="card-body">
	    
	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>No.</th>
	    		<th>ID</th>
	    		<th>Nama Menu</th>
	    		<th>Harga</th>
	    		<th>Aksi</th>
	    	</tr>
	    	<?php
	    		$no = 1;
	    		$tampil = mysqli_query($koneksi, "SELECT * from menu order by idmenu desc");
	    		while($data = mysqli_fetch_array($tampil)) :

	    	?>
	    	<tr>
	    		<td><?=$no++;?></td>
	    		<td><?=$data['idmenu']?></td>
	    		<td><?=$data['namamenu']?></td>
	    		<td><?=$data['harga']?></td>
	    		<td>
	    			<a href="homeCRUD.php?hal=edit&id=<?=$data['idmenu']?>" class="btn btn-warning"> Edit </a>
	    			<a href="homeCRUD.php?hal=hapus&id=<?=$data['idmenu']?>" 
	    			   onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
	    		</td>
	    	</tr>
	    <?php endwhile; //penutup perulangan while ?>
	    </table>

	  </div>
	</div>
	<!-- Akhir Card Tabel -->

</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>