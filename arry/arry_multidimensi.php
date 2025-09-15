<?php 
		$students = [
				["10023", "Queenara", "XI RPL", "korea", "perempuan"],
				["10024", "Razi", "XI RPL", "jepang", "laki laki"],
		 		["10025", "skala", "XI RPL", "amerika", "laki laki"],
		 		["10026", "eloa","XI RPL", "jakarta", "perempuan"],
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
   <?php foreach ($students as $students): ?>
   	   <ul>
   	   		<li><img src="../foto/<?php echo "students"; ?>"></li>
   	   		<li><?php echo $students['0'] ?></li>
   	   		<li><?php echo $students['1'] ?></li>
   	   		<li><?php echo $students['2'] ?></li>
   	   		<li><?php echo $students['3'] ?></li>
   	   </ul>
   <?php endforeach ?>
</body>
</html>