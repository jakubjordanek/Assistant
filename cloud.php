<?php
	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once("connect.php");
	
	if (isset($_FILES['files']))
	{
		$file_name = $_FILES['files']['name'];
		$file_tmp = $_FILES['files']['tmp_name'];
		
		$files = glob("users/".$_SESSION['id']."/*.*");
		$size = 0;
												
		for ($i = 0; $i < count($files); $i++)
		{
			$size += filesize($files[$i]);
		}

		if ($size >= 128000000)
		{
			
		}
		else
		{
			move_uploaded_file($file_tmp, "users/".$_SESSION['id']."/".$file_name);
		}
		
		header("Location: cloud.php");
	}
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
		<link rel="stylesheet" href="css/cloud.css">
		<link rel="stylesheet" href="css/default.css">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php include('panel.php'); ?>

		<div id="header">
			<a href="home.php" class="link-header">
				CLOUD
			</a>
		</div>
	
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

					echo '
						<div class="container">
							<div class="row">
								<table>
									<tr>
										<th width="50%">NAME</th>
										<th width="25%">DATE</th>
										<th width="25%">SIZE</th>
									</tr>
									<tr>
										<td colspan="4">
											<form method="POST" enctype="multipart/form-data">
												<label class="file-upload">
													<input type="file" name="files" accept="image/png, image/jpeg, .txt" onchange="form.submit()">
													<i class="icon-upload-1"></i> Upload a file...
												</label>
											</form>
										</td>
									</tr>
					';
											
					for ($i = 0; $i < count($files); $i++)
					{
						$file = $files[$i];
								
						if (pathinfo($file, PATHINFO_EXTENSION) === "png" || pathinfo($file, PATHINFO_EXTENSION) === "PNG" || pathinfo($file, PATHINFO_EXTENSION) === "jpg" || pathinfo($file, PATHINFO_EXTENSION) === "JPG")
						{
							$type = '<i class="icon-file-image"></i>';
						}
						else if (pathinfo($file, PATHINFO_EXTENSION) === "txt" || pathinfo($file, PATHINFO_EXTENSION) === "TXT")
						{
							$type = '<i class="icon-doc-text"></i>';
						}
												
						echo '
							<tr>
								<td>
									<a href="'.$file.'" class="link-black" target="_blank">
										 '.$type.' '.basename($file).'
									</a>
								</td>
								<td>
									'.date("d.m.Y", filemtime($file)).'
								</td>
								<td>
									'.number_format(filesize($file) / 1048576, 1).' MB
								</td>
							</tr>
						';
					}
									
					echo '
								</table>
							</div>
						</div>
					';
							
					$connect->close();
				}
			}
			catch (Exception $e)
			{
				echo $e;
			}
		?>

		<div id="footer">
			<?php include("footer.php"); ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>