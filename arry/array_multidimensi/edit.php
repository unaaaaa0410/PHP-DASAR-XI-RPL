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
			edit siswa
		</div>	
			<div class="card-body">
				<div class="row">
					<div class="col-3">
					<img src="../foto/<?= $_GET['foto']?>" class="rounded" style="width: 100%;"></td>
						<h1>coba</h1>
					</div>
						<div class="col-6">

							<div class="mb-3">
						    <label for="nisn" class="form-label">nisn</label>
						    <input type="nisn" class="form-control" value="<?= $_GET['nisn'] ?>">
						  </div>

						  <div class="mb-3">
						    <label for="nama" class="form-label">nama</label>
						    <input type="nama" class="form-control" value="<?= $_GET['nama'] ?>" aria-describedby="emailHelp">
						  </div>

						  <div class="mb-3">
						    <label for="kelas" class="form-label">kelas</label>
						    <input type="text" value="<?= $_GET['kelas'] ?>">
						  </div>

						  <div class="mb-3">
						    <label for="alamat" class="form-label">alamat</label>
						    <input type="text" value="<?= $_GET['alamat'] ?>">
						  </div>

						  	<div class="mb-3">
						    <label for="gender" class="form-label">gender</label>
						    <input type="text" value="<?= $_GET['gender'] ?>">
						  </div>


						  <button type="submit" class="btn btn-primary">Submit</button>
	
							<a href="data_sisawa.php" class="btn btn-success">simpan</a>
						<a href="data_sisawa.php" class="btn btn-warning">kembali</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>