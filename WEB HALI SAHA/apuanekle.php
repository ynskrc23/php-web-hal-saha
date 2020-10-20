 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/apuan/jquery.min.js"></script>
  <script src="css/apuan/popper.min.js"></script>
  <script src="css/apuan/bootstrap.min.js"></script>
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
	<a href="adminpaneli.php" class="previous">&laquo; Anasayfa</a>
  <h2 style="text-align:center;">Takım Görüntüleme</h2>
  <h4 style="text-align:center;">Lütfen Türkçe Karakter Kullanmayınız</h4><br>
	</br>
   <form method="post">
   <input type="ara"  name="ara" placeholder="1.Takım Adı">
   <input type="ara"  name="ara2" placeholder="2.Takım Adı">
  <button  type="submit" class="btn btn-primary">Arama</button>
  <br></br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th bgcolor="yellow">Ev Sahibi</th>
		 <th bgcolor="yellow"></th>
        <th bgcolor="yellow">Deplasman</th>
		 <th bgcolor="yellow"></th>
		 <th bgcolor="yellow"></th>
      </tr> 
	 </thead>
	 
	
	<?php
	session_start();

	
	if($_POST)
		
	{ 			$giris=$_POST["ara"];
				$giris2=$_POST["ara2"];
				$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$bul="Select * from fikstur where takim1='".$giris."' && takim2='".$giris2."'";
			$deger= mysqli_query($baglan,$bul);
			$goster=mysqli_fetch_array($deger) ;
			$ID=$goster['ID'];
	
			
	?>
	 
			<tr>
				<th><?php echo $goster["takim1"];?></th>
				<th>vs</th>
				
				<th> <?php echo $goster["takim2"];?></th>
				<th><a href='kayit.php?kayıt=<?php echo $ID; ?>'> Skor Ekle</a></th>
				<th><a href='tarih.php?tarih=<?php echo $ID; ?>'> Tarih Ekle</a></th>
			</tr>
	
	
 
	<?php  } ?>
  </table
 
  </form>
</div>
  
</body>

</html>