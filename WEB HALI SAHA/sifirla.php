<?php 
session_start();
	

$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$sil="Delete from puangecici ";
			$deger= mysqli_query($baglan,$sil);
			
			
header("Location:adminpaneli.php");

?>