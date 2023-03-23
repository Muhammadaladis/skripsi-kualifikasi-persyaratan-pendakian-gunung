<?php
     require 'functions.php';
      $admin = query("SELECT * FROM penyewaan");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GUNUNG GEDE PANGRANGO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="icon" href="logoxampp.png">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!---loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!---header-->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="login.php"><i class="fas fa-user-circle"></i>
				<li><a href="https://www.instagram.com/tn_gedepangrango/"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://www.facebook.com/bookingtnggp/"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/tngedepangrango"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<center>
		<ul>
		<li><a href="adis.php">HOME</a></li>
		<li><a href="informasiresikomedan.php">INFORMASI RESIKO MEDAN</a></li>
		<li><a href="paket.php">GUIDE</a></li>
		<li><a href="jpendakian.php">JALUR PENDAKIAN</a></li>
		<li><a href="kesehatan.php">BOOKING PENDAKIAN</a></li>
		<li class="active"><a href="penyewaan.php">PENYEWAAN ALAT PENDAKIAN</a></li>
		</ul>
	</header>
    <!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="stylepaket.css">
</head>
<body>

</body>
</html>
	<section>
		<div class="row">
            <?php foreach ($admin as $row) : ?>
			    <div class="column">
				    <div class="card" >
                        <img src="img/<?=$row["foto_alat"];?>"style="width:150px;height:auto;padding-top:10px">
                        <h1><?=$row["nama_alat"];?></h1>
                        <p class="title"><?=$row["dekspripsi_alat"];?></p>
                        <p><?=$row["stok_alat"];?></p>
                        <p><?=$row["hargasewa_alat"];?></p>
                        <a href="login.php"><i class="fas fa-user-circle"></i>
                        <a href="https://www.instagram.com/tn_gedepangrango/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/bookingtnggp/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/tngedepangrango"><i class="fab fa-twitter"></i></a></a>
                        <a href="https://bit.ly/2QW36cZ"><p><button>Sewa</button></p></a>
                    </div>
                </div>
            <?php endforeach; ?>
		</div>
	
			
		</section>

		<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Adiskkp.All Right Reserved.</small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
	
</body>
</html>



	



	

	
	
	
	

	

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
	
</body>
</html>