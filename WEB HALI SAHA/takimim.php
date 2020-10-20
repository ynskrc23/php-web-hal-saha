 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/tak/jquery.min.js"></script>
  <script src="css/tak/popper.min.js"></script>
  <script src="css/tak/bootstrap.min.js"></script>
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
	<a href="donus.php" class="previous">&laquo; Anasayfa</a>
  <h2 style="text-align:center;">Takımımdaki Oyuncuları</h2>
  <br></br>
  
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th bgcolor="yellow">İsim</th>
        <th bgcolor="yellow">Soyisim</th>
		  <th bgcolor="yellow">Mevki</th>
		    <th bgcolor="yellow">Performans</th>
			 <th bgcolor="yellow">Adres</th>
			  <th bgcolor="yellow">Doğum Tarihi</th>
			   <th bgcolor="yellow">Email</th>
      </tr> 
	 </thead>
	 
	<?php session_start();
	$email=$_SESSION["giris"];
	
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			
			$bul="Select Takim from kisiler where Email='".$email."'  ";		
			$deger= mysqli_query($baglan,$bul);
			$goster=mysqli_fetch_array($deger) ;
			 
			 $bul2="Select * from kisiler where Takim='".$goster["Takim"]."' ";		
			$deger2= mysqli_query($baglan,$bul2);
			$goster2=mysqli_fetch_array($deger2) ;
			
	?> 
	<?php  
		do { ?> 
			<tr>
				<th><?php echo $goster2["isim"]?></th>
				<th> <?php echo $goster2["Soyisim"]?></th>
				<th> <?php echo $goster2["Mevki"]?></th>
				<th> <?php echo $goster2["performans"]?></th>
				<th> <?php echo $goster2["Adres"]?></th>
				<th> <?php echo $goster2["DogumTarihi"]?></th>
				<th> <?php echo $goster2["Email"]?></th>
			</tr>
	
	<?php } 
		while($goster2=mysqli_fetch_array($deger2))?>
		
 
	
  </table>
  </form>
</div>
  
</body>

</html>