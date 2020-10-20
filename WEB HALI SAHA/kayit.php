<?php
session_start();
	

	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
	$gelen= $_GET['kayıt'];
	$guncelle="select * from fikstur where ID = '".$gelen."'";
	$deger= mysqli_query($baglan,$guncelle);
	$goster=mysqli_fetch_array($deger) ;
	$t1=$goster["takim1"];
	$t2=$goster["takim2"];
		$ekle="insert into puangecici (takim1,takim2,gecici) values ('".$t1."','".$t2."','".$gelen."')";
		$a=mysqli_query($baglan,$ekle);
	$goster=mysqli_fetch_array($a) ;


	
	
	header('Location:skorekle.php');
	
?>