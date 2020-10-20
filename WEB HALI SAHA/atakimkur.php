<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/atkur/jquery.min.js"></script>
  <script src="css/atkur/popper.min.js"></script>
  <script src="css/atkur/bootstrap.min.js"></script>
	<style>
	.bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
	.container-fluid {
      padding-top: 39px;
      padding-bottom: 39px;
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
	$TakimAd=$_POST["takım"];
	$Menajerisim=$_POST["isim"];
	$Menajersoyisim=$_POST["soy"];
	$Menajeremail=$_POST["email"];
$sql="insert into takimlar (TakimAd,Menajerisim,Menajersoyisim,Menajeremail) values ('".$TakimAd."','".$Menajerisim."','".$Menajersoyisim."','".$Menajeremail."')";
			mysqli_query($baglan,$sql);
	
}

?>

<div class="container">
	<a href="adminpaneli.php" class="previous">&laquo; AnaSayfa</a>
	
  <h1 style="text-align:center;">Takımını Kur</h1><br>
	</br>
  <form method="post">
    <div class="form-group">
      <label for="takım">Takımın Adı</label>
      <input type="takım" class="form-control" name="takım">
    </div>
	
	
	 <div class="form-group">
		<label for="isim">İsim*</label>
		<input type="isim" class="form-control" name="isim" placeholder="İsim">
    </div>
	
    <div class="form-group">
		<label for="soy">Soyisim*</label>
		<input type="soy" class="form-control" name="soy" placeholder="Soyisim">
    </div>
		
	
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
    </div>
	
	
    <button type="sumbit" class="btn btn-default btn-lg btn-block" >Kayıt Ol</button>
  </form>
</div>
<br></br>

<footer class="container-fluid bg-4 text-center">
  <p>HALI SAHA KRALLIĞI FUTBOL TURNUVASI BİR "GYTÜRKİYE" ORGANİZASYONUDUR. DETAYLI BİLGİ ALMAK İÇİN 0312 359 30 03</p> 
</footer>

</body> 
</html>
