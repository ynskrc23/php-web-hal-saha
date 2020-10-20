 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/apgor/jquery.min.js"></script>
  <script src="css/apgor/popper.min.js"></script>
  <script src="css/apgor/bootstrap.min.js"></script>
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
  <h2 style="text-align:center;">Puan Durumu Görüntüleme Formu</h2>
  <br></br>
  
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th bgcolor="yellow">Takım </th>
        <th bgcolor="yellow">Puan</th>
		<th bgcolor="yellow">Atılan Gol</th>
		<th bgcolor="yellow">Yenen Gol</th>
		<th bgcolor="yellow">Averaj</th>
      </tr> 
	 </thead>
	 
	<?php 
	session_start();

	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$bul="Select * from puan";
			$deger= mysqli_query($baglan,$bul);
			$goster=mysqli_fetch_array($deger) ;
	?> 
	<?php 
		do { ?> 
			<tr>
				<th><?php echo $goster["takim"]?></th>
				<th> <?php echo $goster["puan"]?></th>
				<th> <?php echo $goster["atilan"]?></th>
				<th> <?php echo $goster["yenilen"]?></th>
				<th> <?php echo $goster["averaj"]?></th>
			</tr>
	
	<?php } 
		while($goster=mysqli_fetch_array($deger))?>
 
	
  </table>
  </form>
</div>
  
</body>

</html>