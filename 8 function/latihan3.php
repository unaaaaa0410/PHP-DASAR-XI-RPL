<?php 

		$pelajar="unaaa";

		function siswa($nama="unaaa", $kelas="XI RPL"){
			   global $pelajar; // mengambil variabel dari luar function
			   
		echo "siswa kelas $kelas yang bernama $pelajar selalu rajin.";
	}
	siswa();

 ?>