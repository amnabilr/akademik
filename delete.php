<?php 
	
	include('config.php'); 

	
	if(isset($_GET['NPM'])){ 
		
		$NPM = $_GET['NPM'];

		$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NPM='$NPM'") or die(mysqli_error($koneksi));

		
		if(mysqli_num_rows($cek) > 0){
			
			$del = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NPM='$NPM'") or die(mysqli_error($koneksi));
			if($del){
				echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
			}else{
				echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
			}
			}else{
				echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mhs";</script>';
			}
			}else{
				echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mhs";</script>';
	}
?>
