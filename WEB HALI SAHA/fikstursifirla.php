<html>

<body>
<?php 
session_start();
	
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			$sil="Delete from fikstur ";
			$deger= mysqli_query($baglan,$sil);
			$sil2="Delete from puan ";
			$deger2= mysqli_query($baglan,$sil2);
			
			header("Location:puansifirla.php");
			 
	?> 
</body>
</html>