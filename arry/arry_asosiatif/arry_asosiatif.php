<?php 
		$students =[ 
	[
		"nisn"=>"0001",
		"nama"=>"elona",
		"alamat"=>"korea",
		"gender"=>"perempuan",
		"kelas"=>"XI RPL",
		"foto"=>"salombhk.jpg",
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
		"foto"=>"vfdgbg.jpg",
	],
	[
		"nisn"=>"0004",
		"nama"=>"angkasa",
		"alamat"=>"korsel",
		"gender"=>"laki laki",
		"kelas"=>"XI RPL",
		"foto"=>"nthr.jpg",
	],
      ];
		// cara menampilkan arry multidimensi
		// var_dump($students["0"]["1"]);
	 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>arry multidimensi</title>
</head>
<body>
   <?php foreach ($students as $students) : ?>
   	   <ul>
   	   		<li><img src="../foto/<?php echo $students['Foto'] ?>"></li>
   	   		<li><?php echo $students['NISN'] ?></li>
   	   		<li><?php echo $students['Nama'] ?></li>
   	   		<li><?php echo $students['Alamat'] ?></li>
   	   		<li><?php echo $students['Gender'] ?></li>
   	   		<li><?php echo $students['Kelas'] ?></li>
   	   </ul>
   <?php endforeach ?>
</body>
</html>