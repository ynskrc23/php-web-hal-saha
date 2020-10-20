<!DOCTYPE html>
<html>
<body>

<?php 
session_start();
	
		$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
		
		$x="Select TakimAd from takimlar";	
		$sorgu = mysqli_query($baglan,$x);
		$liste1=array();
		$diziboyu=0;
		while($liste = mysqli_fetch_assoc($sorgu))
		{   
			$liste1[$diziboyu]=$liste["TakimAd"];
			//echo $liste["TakimAd"].'<br>';
			$diziboyu++;
		}
		
		//echo "Dizi Boyu=".$diziboyu.'<br>' ; 		  
		//echo (rand(0,$diziboyu));
		//echo "<br>";
		//echo $liste1[2];
		//echo "<br>";
		for($y = 0; $y < $diziboyu; $y++) 
			{   $sql="insert into puan (takim) values('".$liste1[$y]."')";
					mysqli_query($baglan,$sql);
			for($z=0; $z< $diziboyu; $z++)
				{ 
			
				if($y != $z)
				{
					$bir=$liste1[$y];
					$iki=$liste1[$z];
					$sql="insert into fikstur (takim1,takim2) values('".$bir."','".$iki."')";
					mysqli_query($baglan,$sql);
				}
				
				}	
			
			}
			echo "Fikstür Başarıyla Oluşturuldu...";
  header("Refresh:3; url=adminpaneli.php");
?>

</body>
</html>