<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/okayıt/jquery.min.js"></script>
  <script src="css/okayıt/popper.min.js"></script>
  <script src="css/okayıt/bootstrap.min.js"></script>
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

if($_POST)
{ 
	$isim=$_POST["isim"];
	$Soyisim=$_POST["soy"];
	$Adres=$_POST["adres"];
	$DogumTarihi=$_POST["bday"];
	$Email=$_POST["email"];
	$Takim=$_POST["takim"];
	$Mevki=$_POST["mevki"];	
	$performans=$_POST["performans"];	
	
	$sql="insert into kisiler (isim,Soyisim,Adres,DogumTarihi,Email,Takim,Mevki,performans) values ('".$isim."','".$Soyisim."','".$Adres."','".$DogumTarihi."','".$Email."','".$Takim."','".$Mevki."','".$performans."')";
			mysqli_query($baglan,$sql);
	header('Location:donus.php');
}

?>
<div class="container" >
	<a href="donus.php" class="previous">&laquo;  Anasayfa</a>
	
	<h1 style="text-align:center;">Kayıt Formu</h1>

	<h4 style="text-align:center;">Lütfen İlgili Alanları Doldurunuz...</h4>
	<h4 style="text-align:center;">Lütfen Türkçe Karakter Kullanmayınız</h4><br>
	</br>
  <form method="post" >

  
    <div class="form-group">
		<label for="isim">İsim*</label>
		<input type="isim" class="form-control" name="isim" placeholder="İsim">
    </div>
	
    <div class="form-group">
		<label for="soy">Soyisim*</label>
		<input type="soy" class="form-control" name="soy" placeholder="Soyisim">
    </div>
	
	<div class="form-group">
		<label for="adres">Adres*</label>
		<input type="adres" class="form-control" name="adres" placeholder="İl/İlçe">
    </div>
	
	<div class="form-group">
		<label for="bday">Doğum Tarihi*</label>
		<input type="date" class="form-control" name="bday" name="bday">
	</div>
	
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
    </div>
	
	<div class="form-group">
		<label for="takım">Takım*</label>
		<input type="takım" class="form-control" name="takim" placeholder="Hangi Takımın Oyuncususun(Boş Bırakmayınız!!!)?">
    </div>
		<label for="mevki">Mevki*</label>
	<div class="form-group">
		
		<input type="mevki" class="form-control" name="mevki" placeholder="Hangi Mevki">
    </div>
	<div class="form-group">
		<label for="performans">Performans</label>
		<input type="performans" class="form-control" name="performans" placeholder="Performans Değeri">
    </div>
	<button type="submit"  class="btn btn-default btn-lg btn-block">Kayıt Ol</button>
	
  </form>
</div>
<br></br>

<footer class="container-fluid bg-4 text-center">
  <p>HALI SAHA KRALLIĞI FUTBOL TURNUVASI BİR "GYTÜRKİYE" ORGANİZASYONUDUR. DETAYLI BİLGİ ALMAK İÇİN 0312 359 30 03</p> 
</footer>

</body> 
</html>
