
</body>
</html>
<!DOCTYPE html>
<html>
<head>

	<title>Detail Siswa</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
	<div class="container-fluid bg-primary-subtle py-5">
		<div class="container">
			<!-- card -->
		<div class="card">
		<div class="card-header">
			detail siswa
		</div>	
			<div class="card-body">
				<div class="row">
					<div class="col-3">
					<img src="../foto/<?= $_GET['foto']?>" class="rounded" style="width: 100%;"></td>
						<h1>coba</h1>
					</div>
						<div class="col-6">
							<table>
								<tr>
									<td>NISN</td>
									<td>:</td>
									<td><?= $_GET['nisn'] ?></td>
								</tr>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td><?= $_GET['nama'] ?></td>

								</tr>
									<tr>
									<td>Kelas</td>
									<td>:</td>
									<td><?= $_GET['kelas'] ?></td>
									
								</tr>
									<tr>
									<td>alamat</td>
									<td>:</td>
									<td><?= $_GET['alamat'] ?></td>
									
								</tr>
									<tr>
									<td>Gender</td>
									<td>:</td>
									<td><?= $_GET['gender'] ?></td>
									
								</tr>
							</table>
						<a href="data_sisawa.php" class="btn btn-warning">kembali</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>