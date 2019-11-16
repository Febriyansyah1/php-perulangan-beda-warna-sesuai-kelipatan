<?php
	$nilai = $_POST["nilai"];

	
	echo "Keterangan <br>";
	echo "Kelipatan 2 Berwarna <font color='red'>merah</font> <br>";
	echo "Kelipatan 3 Berwarna <font color='blue'>biru</font> <br>";
	echo "Kelipatan 2 dan 3 Berwarna <font color='verdant'>hijau</font> 
			<br><br>";
	echo "inputan = ".$nilai."<br> <br>";
	echo "Hasil = ";
	for ($x=1; $x <=$nilai ; $x++) { 
		
		switch ($nilai) {
			case $x % 6 == 0:
		 	echo"<font color='verdant'>" .$x."</font> ";
		 		break;
		 	case $x % 2 == 0:
		 	echo"<font color='red'>" .$x."</font> ";
		 		break;
		 	case $x % 3 == 0:
		 	echo"<font color='blue'>" .$x."</font> ";
		 		break;
		 	default:
		 	echo"<font color='black'>" .$x."</font> ";
		 		break;
		 				}
									}
	
?>