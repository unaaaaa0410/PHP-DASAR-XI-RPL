<?php 
	// ketika buttton buat di klik
	if (isset($_POST['buat'])) {
		// nama inputan
		$namaKue=$_POST['kue'];
		// membuat kue
	setcookie('kue',$namaKue,time() + 3600);

	header("location:COOKIE.php");
	}
	// ketika buttton buat di klik
	if (isset($_POST['hapus'])) {
		// menghapus cookie
	setcookie('kue',"",time() - 3600);

	header("location:COOKIE.php");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cookie</title>
</head>
<body>
 
	<h1>nanti cookie muncul di bawah !</h1>
	<?php 	if (isset($_COOKIE['kue'])): ?>
	<h4> sekarang makan kue <?= $_COOKIE['kue'] ?></h4>
    <?php 	endif ?>
 	<form method="post" action="">
		<input type="text" name="kue">
		<button type="submit" name="buat">buat</button>
		<button type="submit" name="hapus">hapus</button>
	</form>
</body>
</html>