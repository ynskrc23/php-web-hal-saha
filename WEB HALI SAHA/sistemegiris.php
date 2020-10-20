<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/sgiris/jquery.min.js"></script>
  <script src="css/sgiris/popper.min.js"></script>
  <script src="css/sgiris/bootstrap.min.js"></script>
</head>
<body>
<?php
session_start();
$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");


if($_POST)
{ 
	//$mail=$_POST["email"];
	$Email=$_POST["email"];
	$Sifre=$_POST["pwd"];
	$sql="select Email,Sifre from girisler where Email='".$Email."' && Sifre='".$Sifre."' ";
	$veri=mysqli_query($baglan,$sql);
	$deger=mysqli_fetch_array($veri);
	$a="select Email,Sifre from girisler where ID=11 ";
	$a1=mysqli_query($baglan,$a);
	$a2=mysqli_fetch_array($a1);

	if($deger["Email"]==$Email && $deger["Sifre"]==$Sifre)
	{	 $sql1="insert into grsgecici (email,sifre) values ('".$Email."','".$Sifre."')";
			mysqli_query($baglan,$sql1);
		
			if($Email==$a2["Email"] && $Sifre==$a2["Sifre"])
	{     $sql1="insert into grsgecici (email,sifre) values ('".$Email."','".$Sifre."')";
			mysqli_query($baglan,$sql1);
	
		$_SESSION["giris"]=$Email;
		 header("Location:adminpaneli.php");
	}
		else {
			
		
			$_SESSION["giris"]=$Email;
			header("Location:donus.php"); 
		}
		
	}
	else
	{
		echo "hatalı giris";
		
	}
	

}

?>
<div class="container">
  <h2 style="text-align:center;">Sisteme Giriş</h2>
  <br></br>
  <form method="post">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control"  name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Şifre</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
    
    <button  type="submit" class="btn btn-primary">Giriş Yap</button>
  </form>
</div>

</body>
</html>
