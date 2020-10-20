<?php 
session_start();
	
 $gelen= $_GET['red'];
$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$sil="Delete from transfer where Email='".$gelen."' ";
			$deger= mysqli_query($baglan,$sil);
			
			
header("Location:adminpaneli.php");

?>