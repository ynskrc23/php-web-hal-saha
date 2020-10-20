<?php
session_start();
//$email=$_SESSION["giris"];
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
	$gelen= $_GET['teklif'];
	
	$guncelle="select * from kisiler where ID = '".$gelen."'";
	$a=mysqli_query($baglan,$guncelle);
	$goster=mysqli_fetch_array($a) ;
	 $isim=$goster['isim'];
	 $soy=$goster['Soyisim'];
	$takım=$goster['Takim'];
	 $mevki=$goster['Mevki'];
	$email=$goster['Email'];
	 $performans=$goster['performans'];
	

		
		 
		$ekle2="select * from grsgecici";
		$a2=mysqli_query($baglan,$ekle2);
		$goster2=mysqli_fetch_array($a2) ;
		
		$ekle="insert into transfer (isim,soyisim,email,takim,teklifyapan) values ('".$isim."','".$soy."','".$email."','".$takım."','".$goster2["email"]."')";
		$a=mysqli_query($baglan,$ekle);
		$goster=mysqli_fetch_array($a) ;
		
			header('Location:donus.php');
	
	
?> 