<?php 
session_start();
	
$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$sil="Delete from puan ";
			$deger= mysqli_query($baglan,$sil);
			
			echo "Fikstür Başarıyla Sonlandırıldı...";
			
header("Refresh:3; url=adminpaneli.php");

?>