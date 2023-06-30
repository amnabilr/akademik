<?php

	include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<a href="index.php?page=tambah_mhs"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NPM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
					<th>Status Mahasiswa</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				
				$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY NPM DESC") or die(mysqli_error($koneksi));
				
				if(mysqli_num_rows($sql) > 0){
					
					$no = 1;
					
					while($data = mysqli_fetch_assoc($sql)){
						
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['NPM'].'</td>
							<td>'.$data['Nama_Mhs'].'</td>
							<td>'.$data['Jenis_Kelamin'].'</td>
							<td>'.$data['Status_Aktif'].'</td>
							<td>
								<a href="index.php?page=edit_mhs&NPM='.$data['NPM'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?NPM='.$data['NPM'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
