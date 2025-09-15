<?php

	$students =[ 
	[
		"nisn"=>"0001",
		"nama"=>"elona",
		"alamat"=>"korea",
		"gender"=>"perempuan",
		"kelas"=>"XI RPL",
		"foto"=>"salombhk.jpg"
	],
	[
		"nisn"=>"0002",
		"nama"=>"dipo",
		"alamat"=>"korsel",
		"gender"=>"laki laki",
		"kelas"=>"XI RPL",
		"foto"=>"nthr.jpg"
	],
	[
		"nisn"=>"0003",
		"nama"=>"galaksi",
		"alamat"=>"korsel",
		"gender"=>"laki laki",
		"kelas"=>"XI RPL",
		"foto"=>"vfdgbg.jpg"
	],
	[
		"nisn"=>"0004",
		"nama"=>"angkasa",
		"alamat"=>"korsel",
		"gender"=>"laki laki",
		"kelas"=>"XI RPL",
		"foto"=>"nthr.jpg"
	],
      ];
      //cara menampikan array multidimensi
      //var_dump($siswa);
	 ?>
	 <?php $no=1 ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

	<title>Data Siswa</title>
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
			data siswa
		</div>	
			<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">NO.</th>
						<th scope="col">Foto</th>
						<th scope="col">NISN</th>
						<th scope="col">Nama</th>
						<th scope="col">Kelas</th>
						<th scope="col">Alamat</th>
						<th scope="col">Gender</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($students as $student) : ?>
					<tr>
						<th scope="row"><?= $no ?></th>
						<td><img src="../foto/<?= $student['foto']?>" class="rounded"></td>
						<td><?=$student['nisn'] ?></td>
						<td><?=$student['nama'] ?></td>
						<td><?=$student['kelas'] ?></td>
						<td><?=$student['alamat'] ?></td>
						<td><?=$student['gender'] ?></td>
						<td>
							<a href="edit.php?foto=<?= $student['foto']?>
							&nisn=<?=$student['nisn']  ?>
							&nama=<?=$student['nama'] ?>
							&kelas=<?=$student['kelas'] ?>
							&alamat=<?=$student['alamat'] ?>
							&gender=<?=$student['gender'] ?>" class="btn btn-success"> 
							<i class="bi bi-pencil-fill"></i>

							<a href="detail.php?foto=<?= $student['foto']?>
							&nisn=<?=$student['nisn']  ?>
							&nama=<?=$student['nama'] ?>
							&kelas=<?=$student['kelas'] ?>
							&alamat=<?=$student['alamat'] ?>
							&gender=<?=$student['gender'] ?>" class="btn btn-primary"> 
							<i class="bi bi-list"></i></a>

						</td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>