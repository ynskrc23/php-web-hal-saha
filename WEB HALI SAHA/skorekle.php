 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/skorekle/jquery.min.js"></script>
  <script src="css/skorekle/popper.min.js"></script>
  <script src="css/skorekle/bootstrap.min.js"></script>
	<style> 
input[type=ara] {
    width: 40%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 5px 10px 5px 26px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
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


<div class="container">
	<a href="apuanekle.php" class="previous">&laquo; Anasayfa</a>
  <h2 style="text-align:center;">Skor Ekle</h2>
  <br></br>
   <form method="post">
  
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th bgcolor="yellow">Ev Sahibi</th>
		 <th bgcolor="yellow"></th>
		  <th bgcolor="yellow"></th>
        <th bgcolor="yellow">Deplasman</th>
      </tr> 
	 </thead>
	 
	
	<?php 
	session_start();
	
			$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$bul="Select * from puangecici ";
			$deger= mysqli_query($baglan,$bul);
			$goster=mysqli_fetch_array($deger) ;
	if($_POST)
		{		$skor1=$_POST["a"];
				$skor2=$_POST["ar"];
		echo $skor1;
			if($skor1>$skor2)
	{  $sql= "update fikstur set t1skor='".$skor1."',t2skor='".$skor2."' where ID='".$goster["gecici"]."'";
			mysqli_query($baglan,$sql);

			$d="select puan from puan where takim='".$goster["takim1"]."'";
			mysqli_query($baglan,$d);
			$a=3;
			//atilan
			$d1="select atilan from puan where takim='".$goster["takim1"]."'";
			mysqli_query($baglan,$d1);
			$a1=$skor1;
			//yenen
			$d2="select yenilen from puan where takim='".$goster["takim1"]."'";
			mysqli_query($baglan,$d2);
			$a2=$skor2;
			//averaj
			$d3="select averaj from puan where takim='".$goster["takim1"]."'";
			mysqli_query($baglan,$d3);
			$a3=$skor1-$skor2;
			
		$sql1= "update puan set puan=puan +'".$a."',atilan=atilan +'".$a1."',yenilen=yenilen +'".$a2."',averaj=averaj +'".$a3."' where takim='".$goster["takim1"]."' ";
			mysqli_query($baglan,$sql1); 
			header("Location:sifirla.php");
	}
	if($skor1<$skor2)
	{  $sql= "update fikstur set t1skor='".$skor1."',t2skor='".$skor2."'  where ID='".$goster["gecici"]."'";
			mysqli_query($baglan,$sql);

			$d="select puan from puan where takim='".$goster["takim2"]."'";
			mysqli_query($baglan,$d);
			$a=3;
			//atılan
			$d1="select atilan from puan where takim='".$goster["takim2"]."'";
			mysqli_query($baglan,$d1);
			$a1=$skor2;
			//yenen
			$d2="select yenilen from puan where takim='".$goster["takim2"]."'";
			mysqli_query($baglan,$d2);
			$a2=$skor1;
			//aveeraj
			$d3="select averaj from puan where takim='".$goster["takim2"]."'";
			mysqli_query($baglan,$d3);
			$a3=$skor2-$skor1;
			$sql1= "update puan set puan=puan+'".$a."',yenilen=yenilen+'".$a1."',atilan=atilan+'".$a2."',averaj=averaj+'".$a3."' where takim='".$goster["takim2"]."' ";
			mysqli_query($baglan,$sql1); 
			header("Location:sifirla.php");
	}
	if($skor1==$skor2)
	{   $sql= "update fikstur set t1skor='".$skor1."',t2skor='".$skor2."' where ID='".$goster["gecici"]."' ";
			mysqli_query($baglan,$sql);

			$d="select puan from puan where takim='".$goster["takim2"]."'";
			mysqli_query($baglan,$d);
			$a=1;
			//atilan
			$d1="select atilan from puan where takim='".$goster["takim2"]."'";
			mysqli_query($baglan,$d1);
			$a1=$skor2;
		//yenen
			$d2="select yenilen from puan where takim='".$goster["takim2"]."'";
			mysqli_query($baglan,$d2);
			$a2=$skor1;
		$sql1= "update puan set puan=puan+'".$a."',atilan=atilan+'".$a1."',yenilen=yenilen+'".$a2."' where takim='".$goster["takim2"]."' ";
			mysqli_query($baglan,$sql1);
			
			
			$d="select puan from puan where takim='".$goster["takim1"]."'";
			mysqli_query($baglan,$d);
			//atilan
			$d1="select atilan from puan where takim='".$goster["takim1"]."'";
			mysqli_query($baglan,$d1);
			$a1=$skor1;
			//yenen
			$d2="select yenilen from puan where takim='".$goster["takim1"]."'";
			mysqli_query($baglan,$d2);
			$a2=$skor2;
		$sql1= "update puan set puan=puan+'".$a."',atilan=atilan+'".$a1."',yenilen=yenilen+'".$a2."' where takim='".$goster["takim1"]."' ";
			mysqli_query($baglan,$sql1);
			header("Location:sifirla.php");
	}

		
	
			
	} 
			
	?>
	 
			<tr>
				<th><?php echo $goster["takim1"];?></th>
				<th> <input size="5"  name="a" placeholder="Skor"></th>
				<th> <input  size="5" name="ar" placeholder="Skor"></th>
				<th> <?php echo $goster["takim2"];?></th>
			</tr>
	
	
 
	
  </table>
 
	 <button  type="submit" class="btn btn-primary">Kayıt Et</button>
  </form>
 
</div>
  
</body>

</html>