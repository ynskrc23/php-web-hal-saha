<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/yenile/jquery.min.js"></script>
  <script src="css/yenile/popper.min.js"></script>
  <script src="css/yenile/bootstrap.min.js"></script>
	<style>
	.bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
	.container-fluid {
      padding-top: 35px;
      padding-bottom: 35px;
  }
	.previous {
    background-color: #f1f1f1;
    color: black;
  }
	
	a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
 }
	a:hover {
    background-color: #ddd;
    color: black;
 }


	</style>
</head>

<body>
<?php 
session_start();
	
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
		



?>
<div class="container" >
	
	<h1 style="text-align:center;">Güncelleme Formu</h1>

	<h4 style="text-align:center;">Lütfen İlgili Alanları Değiştiriniz...</h4><br>
	</br>
	
	<?php
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
	$gelen= $_GET['guncel'];
	
	$guncelle="select * from kisiler where ID = '".$gelen."'";
	$a=mysqli_query($baglan,$guncelle);
	$goster=mysqli_fetch_array($a) ;
	 $isim=$goster['isim'];
	 $soy=$goster['Soyisim'];
	$takım=$goster['Takim'];
	 $mevki=$goster['Mevki'];
	 $performans=$goster['performans'];
	if($_POST)
	{  
		$isim=$_POST['isim'];
		$soy=$_POST['soy'];
		$takım=$_POST['takim'];
		$mevki=$_POST['mevki'];
		$performans=$_POST['performans'];
		$guncel="update kisiler set isim='".$isim."',Soyisim='".$soy."', Takim='".$takım."', Mevki='".$mevki."',performans='".$performans."' where ID='$gelen' ";
		mysqli_query($baglan,$guncel);
		header('Location:adminpaneli.php');
		
		
	}
	
?> 
  <form method="post" >

  
    <div class="form-group">
		<label for="isim">İsim*</label>
		<input type="isim" class="form-control" name="isim" value=<?php echo $isim;?> >
    </div>
	
    <div class="form-group">
		<label for="soy">Soyisim*</label>
		<input type="soy" class="form-control" name="soy" value=<?php echo $soy; ?> >
    </div>

	
	<div class="form-group">
		<label for="takım">Takım*</label>
		<input type="takım" class="form-control" name="takim" value=<?php echo $takım;?>>
    </div>
		<label for="mevki">Mevki*</label>
	<div class="form-group">
		
		<input type="mevki" class="form-control" name="mevki" value=<?php echo $mevki; ?> >
    </div>
	<label for="mevki">Performans*</label>
	<div class="form-group">
		
		<input type="mevki" class="form-control" name="performans" value=<?php echo $performans; ?> >
    </div>
	
	<button type="submit"  class="btn btn-default btn-lg btn-block">Güncelle</button>
	
  </form>
 
	
</div>
<br></br>

<footer class="container-fluid bg-4 text-center">
  <p>HALI SAHA KRALLIĞI FUTBOL TURNUVASI BİR "GYTÜRKİYE" ORGANİZASYONUDUR. DETAYLI BİLGİ ALMAK İÇİN 0312 359 30 03</p> 
</footer>

</body> 
</html>
