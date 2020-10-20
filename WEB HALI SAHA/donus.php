<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="css/donus/jquery.min.js"></script>
  <script src="css/donus/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand" href="https://www.gyturkiye.org/">Anasayfa</a>
	</div>
    <ul class="nav navbar-nav">
	  <li><a href="takimkur.php">Takım Kurma</a></li>
      <li class="active"><a href="oyuncukayit.php">Oyuncu Ekleme</a></li>
      <li><a href="görüntüleme.php">Oyuncu Görüntüleme</a></li>
	  <li><a href="fiksturgoruntule.php"> Genel Fikstür</a></li>
	     <li><a href="fikturum.php">Fikstürüm</a></li>
	  <li><a href="puangoruntule.php">Puan Durumu</a></li>
	   <li><a href="takimim.php">Takımım</a></li>
	    <li><a href="transfer.php">Transfer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<li> <font size="3" color="white">
	<?php 
	session_start();
			$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$sec="select * from grsgecici  ";
			$deger= mysqli_query($baglan,$sec);
			$goster=mysqli_fetch_array($deger) ;
			$sec2="select * from kisiler where Email='".$goster["email"]."' ";
			$deger2= mysqli_query($baglan,$sec2);	
			$goster2=mysqli_fetch_array($deger2) ;
			 	
				//echo  $goster2["isim"];  
				//echo  $goster2["Soyisim"]; 
				echo $_SESSION["giris"];
	?>  
	</li>
		<li><a href="cikis.php"><span class="glyphicon glyphicon-log-in"></span> Çıkış Yap</a></li>
	</ul>
		</div>
		
</nav>

<div class="container">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img\hali_saha.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img\kupa.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img\indir.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
