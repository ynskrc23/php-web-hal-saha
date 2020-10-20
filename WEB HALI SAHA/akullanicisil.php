 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/aksil/jquery.min.js"></script>
  <script src="css/aksil/popper.min.js"></script>
  <script src="css/aksil/bootstrap.min.js"></script>
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
	<a href="adminpaneli.php" class="previous">&laquo;  Anasayfa</a>
  <h2 style="text-align:center;">Kullanıcı Görüntüleme & Silme Formu</h2>
  <h4 style="text-align:center;">Lütfen Türkçe Karakter Kullanmayınız</h4><br>
	</br>
  
  

  
  <br></br>
 <table class="table table-bordered">
    <thead>
      <tr>
        <th bgcolor="yellow">İsim</th>
        <th bgcolor="yellow">Soyisim</th>
        <th bgcolor="yellow">Email</th>
		<th bgcolor="yellow">Şifre</th>
		<th bgcolor="yellow"></th>
      </tr> 
	 </thead>
	 
	
	<?php 
	session_start();
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
		
		$bul="Select * from girisler ";
			$deger= mysqli_query($baglan,$bul);
			$goster=mysqli_fetch_array($deger) ;
			
			 
	?> 
	<?php 
		do { $ID=$goster['ID']; 
			?> 
	
			<tr>
				<th><?php echo $goster["isim"]?></th>
				<th><?php echo $goster["soyisim"]?></th>
				<th><?php echo $goster["Email"]?></th>
				<th><?php echo $goster["Sifre"]?></th>
			
		<th><a href='ksil.php?sil=<?php echo $ID; ?>'> Sil</a></th>
			
			</tr>
	
	<?php } 
		while($goster=mysqli_fetch_array($deger))?>
	
	
	
  </table>
  
  
</div>
  
</body>

</html>