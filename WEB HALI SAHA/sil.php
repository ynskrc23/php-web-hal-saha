<?php
session_start();
	
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
	$gelen= $_GET['sil'];
	
	$temizle="delete from kisiler where ID = '".$gelen."'";
	mysqli_query($baglan,$temizle);
	header('Location:aoyuncusilme.php');
	
?>