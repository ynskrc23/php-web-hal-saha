 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="css/fgor/jquery.min.js"></script>
  <script src="css/fgor/popper.min.js"></script>
  <script src="css/fgor/bootstrap.min.js"></script>
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
  <h2 style="text-align:center;">Fikstür Görüntüleme</h2>
  <br></br>
  
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th bgcolor="yellow">Ev Sahibi</th>
		 <th bgcolor="yellow"></th>
		  <th bgcolor="yellow"></th>
        <th bgcolor="yellow">Deplasman</th>
		<th bgcolor="yellow">Tarih</th>

		</tr> 
	 </thead>
	 
	<?php 
	session_start();
	
	$baglan=mysqli_connect("94.73.144.27","u7764842_userBAB","KAplan.42");
		mysqli_select_db($baglan,"u7764842_dbBAB");
			
			$bul="Select * from fikstur";
			$deger= mysqli_query($baglan,$bul);
			$goster=mysqli_fetch_array($deger) ;
	?> 
	<?php 
		do { ?> 
			<tr>
				<th><?php echo $goster["takim1"]?></th>
				<th><?php echo $goster["t1skor"]?></th>
				<th><?php echo $goster["t2skor"]?></th>
				<th> <?php echo $goster["takim2"]?></th>
				<th> <?php echo date("d.m.Y",strtotime($goster["tarih"]))?></th>
			</tr>
	
	<?php } 
		while($goster=mysqli_fetch_array($deger))?>
 
	
  </table>
  </form>
</div>
  
</body>

</html>