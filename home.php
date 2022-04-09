<?php
	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once("connect.php");
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>ASSISTANT - your virtual assistant!</title>
		
		<meta name="author" content="Jakub Jordanek">
		<meta name="description" content="">
		<meta name="keywords" content="">
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/default.css">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php include('panel.php'); ?>
	
		<div id="header">
			<a href="home.php" class="link-header">
				ASSISTANT
			</a>
		</div>
	
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href="euro.php" class="link-white">
						<figure style="background-color: #30C73A;">
							<i class="icon-soccer-ball"></i>
							<b>UEFA EURO 2020</b>
						</figure>
					</a>
				</div>
				
				<div class="col-lg-6">
					<a href="calendar.php" class="link-white">
						<figure style="background-color: #DB3939;">
							<i class="icon-calendar"></i>
							<b>CALENDAR</b>
						</figure>
					</a>
				</div>

				<div class="col-lg-6">
					<a href="cloud.php" class="link-white">
						<figure style="background-color: #2E92F5;">
							<i class="icon-upload"></i>
							<b>CLOUD</b>
							<?php
								try
								{
									$connect = new mysqli($host, $db_user, $db_password, $db_name);
									if ($connect->connect_errno!=0)
									{
										throw new Exception(mysqli_connect_errno());
									}
									else
									{
										$files = glob("users/".$_SESSION['id']."/*.*");
										$size = 0;
												
										for ($i = 0; $i < count($files); $i++)
										{
											$size += filesize($files[$i]);
										}
												
										echo ' ['.number_format($size / 1048576, 1)." MB / 128 MB]";

										$connect->close();
									}
								}
								catch (Exception $e)
								{
									echo $e;
								}
							?>
						</figure>
					</a>
				</div>
			</div>
		</div>
			
		<div id="footer">
			<?php include("footer.php"); ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>