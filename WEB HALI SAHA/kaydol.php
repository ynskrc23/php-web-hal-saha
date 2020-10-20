<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/kaydol/jquery.min.js"></script>
  <script src="css/kaydol/popper.min.js"></script>
  <script src="css/kaydol/bootstrap.min.js"></script>
</head>
<body>
<?php
	session_start();
	
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");


	if($_POST)
		{ 
			$isim=$_POST["isim"];
			$soyisim=$_POST["soy"];
			$Email=$_POST["email"];
			$Sifre=$_POST["pwd"];
			$takim=$_POST["takim"];
			$sql="insert into girisler (isim,soyisim,Email,Sifre) values ('".$isim."','".$soyisim."','".$Email."','".$Sifre."')";
				
			mysqli_query($baglan,$sql);
			$sql2="insert into kisiler (isim,soyisim,Email,Takim) values ('".$isim."','".$soyisim."','".$Email."','".$takim."')";
				
			mysqli_query($baglan,$sql2);
			header("Location:index.php");
	}

?>

<div class="container">
  <h2 style="text-align:center;">Sisteme Kayıt Ol</h2>
  <br></br>
  <form method="post">
	<div class="form-group">
		<label for="isim">İsim</label>
		<input type="isim" class="form-control"  name="isim" placeholder="İsim">
    </div>
	
    <div class="form-group">
		<label for="soy">Soyisim</label>
		<input type="soy" class="form-control"  name="soy" placeholder="Soyisim">
    </div>
	
	<div class="form-group">
      <label for="soy">Takim</label>
      <input type="soy" class="form-control" name="takim" placeholder="Takim Giriniz" name="email">
    </div>
	
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email Giriniz" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Şifre</label>
      <input type="password" class="form-control" name="pwd" placeholder="Şifre Giriniz" name="pswd">
    </div>
    
    <button type="submit" class="btn btn-default btn-lg btn-block">Kayıt Ol</button>
  </form>
</div>

</body>
</html>
