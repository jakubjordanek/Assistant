<?php
	session_start();

	if (isset($_SESSION['logged']))
	{
		header('Location: home.php');
		exit();
	}
	
	if (isset($_POST['email']))
	{
		$correct = true;
		
		// FIRST NAME //
		$first_name = $_POST['first_name'];
		
		if ((strlen($first_name) < 3) || (strlen($first_name) > 25))
		{
			$correct = false;
			$_SESSION['error_first_name'] = 'style="border-bottom: 1px solid #E66868;"';
		}
		
		if (ctype_alnum($first_name) == false)
		{
			$correct = false;
			$_SESSION['error_first_name'] = 'style="border-bottom: 1px solid #E66868;"';
		}
		
		// LAST NAME //
		$last_name = $_POST['last_name'];
		
		if ((strlen($last_name) < 3) || (strlen($last_name) > 50))
		{
			$correct = false;
			$_SESSION['error_last_name'] = 'style="border-bottom: 1px solid #E66868;"';
		}
		
		if (ctype_alnum($last_name) == false)
		{
			$correct = false;
			$_SESSION['error_last_name'] = 'style="border-bottom: 1px solid #E66868;"';
		}
		
		// E-MAIL //
		$email = $_POST['email'];
		$emailS = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailS, FILTER_VALIDATE_EMAIL) == false) || ($emailS != $email))
		{
			$correct = false;
			$_SESSION['error_email'] = 'style="border-bottom: 1px solid #E66868;"';
		}
		
		// PASSWORD //
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		if ((strlen($password) < 8) || (strlen($password) > 20))
		{
			$correct = false;
			$_SESSION['error_password'] = 'style="border-bottom: 1px solid #E66868;"';
		}
		
		if ($password != $password2)
		{
			$correct = false;
			$_SESSION['error_password2'] = 'style="border-bottom: 1px solid #E66868;"';
		}
		
		$password_hash = password_hash($password, PASSWORD_DEFAULT);
		
		require_once("connect.php");
		
		try
		{
			$connect = new mysqli($host, $db_user, $db_password, $db_name);
			if ($connect->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				$result = $connect->query("SELECT id FROM users WHERE email='$email'");
				if (!$result)
				{
					throw new Exception($connect->error);
				}
				
				$email_count = $result->num_rows;
				if ($email_count > 0)
				{
					$correct = false;
				}
				
				if ($correct == true)
				{
					if ($connect->query("INSERT INTO users VALUES (NULL, '$first_name', '$last_name', '$email', '$password_hash')"))
					{
						$number = mysqli_fetch_array($connect->query("SELECT * FROM users WHERE email='$email'"));
						mkdir("users/".$number[0]);
						
						$_SESSION['success'] = true;
						header('Location: index.php');
					}
					else
					{
						throw new Exception($connect->error);
					}
				}
				
				$connect->close();
			}
		}
		catch (Exception $e)
		{
			echo $e;
		}
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
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="css/default.css">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<a href="index.php" class="link-header">
				ASSISTANT
			</a>
		</div>
	
		<div id="login-panel">
			<h3>SIGN UP</h3>
					
			<form method="POST">
				<input type="text" placeholder="FIRST NAME" name="first_name" <?php if (isset($_SESSION['error_first_name'])) { echo $_SESSION['error_first_name']; unset($_SESSION['error_first_name']); } ?>>
				<input type="text" placeholder="LAST NAME" name="last_name" <?php if (isset($_SESSION['error_last_name'])) { echo $_SESSION['error_last_name']; unset($_SESSION['error_last_name']); } ?>>
				<input type="text" placeholder="EMAIL" name="email" <?php if (isset($_SESSION['error_email'])) { echo $_SESSION['error_email']; unset($_SESSION['error_email']); } ?>>
				<input type="password" placeholder="PASSWORD" name="password" <?php if (isset($_SESSION['error_password'])) { echo $_SESSION['error_password']; unset($_SESSION['error_password']); } ?>>
				<input type="password" placeholder="CONFIRM PASSWORD" name="password2" <?php if (isset($_SESSION['error_password2'])) { echo $_SESSION['error_password2']; unset($_SESSION['error_password2']); } ?>>
				<input type="submit" value="SIGN UP">
				<a href="index.php" class="link-black">...OR LOG IN TO YOUR ACCOUNT!</a>
			</form>
		</div>
		
		<div id="footer">
			<?php include("footer.php"); ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>