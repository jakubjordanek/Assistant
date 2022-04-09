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
		<link rel="stylesheet" href="css/default.css">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php include('panel.php'); ?>
	
		<div id="header">
			<a href="home.php" class="link-header">
				CALENDAR
			</a>
		</div>
	
		<div class="container">
			<div class="row">
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
							$connect->close();
						}
					}
					catch (Exception $e)
					{
						echo $e;
					}
				?>
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