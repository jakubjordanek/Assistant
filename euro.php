<?php
	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
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
		<link rel="stylesheet" href="css/animation.css">
		<link rel="stylesheet" href="css/euro.css">
		<link rel="stylesheet" href="css/default.css">
		
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php include('panel.php'); ?>
	
		<div id="header">
			<a href="home.php" class="link-header">
				UEFA EURO 2020
			</a>
		</div>
		
		<div class="tabs">
			<center>
				<button class="tab-links" onclick="openTab(event, 'matches')" id="defaultOpen">Matches</button>
				<button class="tab-links" onclick="openTab(event, 'standings')">Standings</button>
			</center>
		</div>
		
		<div class="tab-content" id="matches">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 style="margin-top: 50px;">Matchday 1 of 3</h4>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<!-- <i class="icon-soccer-ball-1 animate-spin"></i> -->
									<th colspan="4">11 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Turkey <img src="flags/turkey.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">3</td>
									<td width="40%" style="text-align: left;"><img src="flags/italy.png" width="16"> Italy</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">12 June, 15:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Wales <img src="flags/wales.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/switzerland.png" width="16"> Switzerland</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">12 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Denmark <img src="flags/denmark.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/finland.png" width="16"> Finland</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">12 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Belgium <img src="flags/belgium.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/russia.png" width="16"> Russia</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">13 June, 15:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">England <img src="flags/england.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/croatia.png" width="16"> Croatia</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">13 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Austria <img src="flags/austria.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/north-macedonia.png" width="16"> North Macedonia</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">13 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Netherlands <img src="flags/netherlands.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/Ukraine.png" width="16"> Ukraine</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">14 June, 15:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Scotland <img src="flags/scotland.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/czech-republic.png" width="16"> Czech Republic</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">14 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Poland <img src="flags/poland.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/slovakia.png" width="16"> Slovakia</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">14 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Spain <img src="flags/spain.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/sweden.png" width="16"> Sweden</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">15 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Hungary <img src="flags/hungary.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">3</td>
									<td width="40%" style="text-align: left;"><img src="flags/portugal.png" width="16"> Portugal</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">15 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">France <img src="flags/france.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/germany.png" width="16"> Germany</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-12">
						<h4 style="margin-top: 50px;">Matchday 2 of 3</h4>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">16 June, 15:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Finland <img src="flags/finland.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/russia.png" width="16"> Russia</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">16 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Turkey <img src="flags/turkey.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/wales.png" width="16"> Wales</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">16 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Italy <img src="flags/italy.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/switzerland.png" width="16"> Switzerland</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">17 June, 15:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Ukraine <img src="flags/ukraine.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/north-macedonia.png" width="16"> North Macedonia</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">17 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Denmark <img src="flags/denmark.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/belgium.png" width="16"> Belgium</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">17 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Netherlands <img src="flags/netherlands.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/austria.png" width="16"> Austria</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">18 June, 15:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Sweden <img src="flags/sweden.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/slovakia.png" width="16"> Slovakia</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">18 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Croatia <img src="flags/croatia.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/czech-republic.png" width="16"> Czech Republic</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">18 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">England <img src="flags/england.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/scotland.png" width="16"> Scotland</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">19 June, 15:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Hungary <img src="flags/hungary.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/france.png" width="16"> France</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">19 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Portugal <img src="flags/portugal.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">4</td>
									<td width="40%" style="text-align: left;"><img src="flags/germany.png" width="16"> Germany</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">19 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Spain <img src="flags/spain.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/poland.png" width="16"> Poland</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-12">
						<h4 style="margin-top: 50px;">Matchday 3 of 3</h4>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">20 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Italy <img src="flags/italy.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/wales.png" width="16"> Wales</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">20 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Switzerland <img src="flags/switzerland.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/turkey.png" width="16"> Turkey</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">21 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Ukraine <img src="flags/ukraine.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/austria.png" width="16"> Austria</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">21 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">North Macedonia <img src="flags/north-macedonia.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">3</td>
									<td width="40%" style="text-align: left;"><img src="flags/netherlands.png" width="16"> Netherlands</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">21 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Russia <img src="flags/russia.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">4</td>
									<td width="40%" style="text-align: left;"><img src="flags/denmark.png" width="16"> Denmark</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">21 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Finland <img src="flags/finland.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/belgium.png" width="16"> Belgium</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">22 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Croatia <img src="flags/croatia.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/scotland.png" width="16"> Scotland</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">22 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Czech Republic <img src="flags/czech-republic.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/england.png" width="16"> England</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">23 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Sweden <img src="flags/sweden.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/poland.png" width="16"> Poland</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">23 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Slovakia <img src="flags/slovakia.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">5</td>
									<td width="40%" style="text-align: left;"><img src="flags/spain.png" width="16"> Spain</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">23 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Portugal <img src="flags/portugal.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/france.png" width="16"> France</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">23 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Germany <img src="flags/germany.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/hungary.png" width="16"> Hungary</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-12">
						<h4 style="margin-top: 50px;">Round of 16</h4>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">26 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Wales <img src="flags/wales.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">4</td>
									<td width="40%" style="text-align: left;"><img src="flags/denmark.png" width="16"> Denmark</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">26 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Italy <img src="flags/italy.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/austria.png" width="16"> Austria</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">27 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Netherlands <img src="flags/netherlands.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/czech-republic.png" width="16"> Czech Republic</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">27 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Belgium <img src="flags/belgium.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/portugal.png" width="16"> Portugal</td>
								</tr>
							</table>
						</figure>
					</div>
			
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">28 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Croatia <img src="flags/croatia.png" width="16"></td>
									<td width="10%">3</td>
									<td width="10%">5</td>
									<td width="40%" style="text-align: left;"><img src="flags/spain.png" width="16"> Spain</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">28 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">France <img src="flags/france.png" width="16"></td>
									<td width="10%">3 <sup>4</sup></td>
									<td width="10%">3 <sup>5</sup></td>
									<td width="40%" style="text-align: left;"><img src="flags/switzerland.png" width="16"> Switzerland</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">29 June, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">England <img src="flags/england.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">0</td>
									<td width="40%" style="text-align: left;"><img src="flags/germany.png" width="16"> Germany</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">29 June, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Sweden <img src="flags/sweden.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/ukraine.png" width="16"> Ukraine</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-12">
						<h4 style="margin-top: 50px;">Quarter-final</h4>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">2 July, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Switzerland <img src="flags/switzerland.png" width="16"></td>
									<td width="10%">1 <sup>1</sup></td>
									<td width="10%">1 <sup>3</sup></td>
									<td width="40%" style="text-align: left;"><img src="flags/spain.png" width="16"> Spain</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">2 July, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Belgium <img src="flags/belgium.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/italy.png" width="16"> Italy</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">3 July, 18:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Czech Republic <img src="flags/czech-republic.png" width="16"></td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="40%" style="text-align: left;"><img src="flags/denmark.png" width="16"> Denmark</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">3 July, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Ukraine <img src="flags/ukraine.png" width="16"></td>
									<td width="10%">0</td>
									<td width="10%">4</td>
									<td width="40%" style="text-align: left;"><img src="flags/england.png" width="16"> England</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-12">
						<h4 style="margin-top: 50px;">Semi-final</h4>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">6 July, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Italy <img src="flags/italy.png" width="16"></td>
									<td width="10%">1 <sup>4</sup></td>
									<td width="10%">1 <sup>2</sup></td>
									<td width="40%" style="text-align: left;"><img src="flags/spain.png" width="16"> Spain</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">7 July, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">England <img src="flags/england.png" width="16"></td>
									<td width="10%">2</td>
									<td width="10%">1</td>
									<td width="40%" style="text-align: left;"><img src="flags/denmark.png" width="16"> Denmark</td>
								</tr>
							</table>
						</figure>
					</div>
				
					<div class="col-12">
						<h4 style="margin-top: 50px;">Final</h4>
					</div>
					
					<div class="col-lg-6">
						<figure>
							<table>
								<tr>
									<th colspan="4">11 July, 21:00 <i class="icon-ok"></i></th>
								</tr>
								<tr>
									<td width="40%" style="text-align: right;">Italy <img src="flags/italy.png" width="16"></td>
									<td width="10%">1 <sup>3</sup></td>
									<td width="10%">1 <sup>2</sup></td>
									<td width="40%" style="text-align: left;"><img src="flags/england.png" width="16"> England</td>
								</tr>
							</table>
						</figure>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab-content" id="standings">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4 style="margin-top: 50px;">Group A</h4>
						
						<figure>
							<table>
								<tr>
									<th style="text-align: left;">Club</th>
									<th>MP</th>
									<th>W</th>
									<th>D</th>
									<th>L</th>
									<th>Pts</th>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">1 <img src="flags/italy.png" width="16"> Italy</td>
									<td width="10%">3</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">0</td>
									<td width="10%">9</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">2 <img src="flags/wales.png" width="16"> Wales</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">4</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">3 <img src="flags/switzerland.png" width="16"> Switzerland</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">4</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">4 <img src="flags/turkey.png" width="16"> Turkey</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">0</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-12">
						<h4 style="margin-top: 50px;">Group B</h4>
						
						<figure>
							<table>
								<tr>
									<th style="text-align: left;">Club</th>
									<th>MP</th>
									<th>W</th>
									<th>D</th>
									<th>L</th>
									<th>Pts</th>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">1 <img src="flags/belgium.png" width="16"> Belgium</td>
									<td width="10%">3</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">0</td>
									<td width="10%">9</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">2 <img src="flags/denmark.png" width="16"> Denmark</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="10%">3</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">3 <img src="flags/finland.png" width="16"> Finland</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="10%">3</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">4 <img src="flags/russia.png" width="16"> Russia</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="10%">3</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-12">
						<h4 style="margin-top: 50px;">Group C</h4>
						
						<figure>
							<table>
								<tr>
									<th style="text-align: left;">Club</th>
									<th>MP</th>
									<th>W</th>
									<th>D</th>
									<th>L</th>
									<th>Pts</th>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">1 <img src="flags/netherlands.png" width="16"> Netherlands</td>
									<td width="10%">3</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">0</td>
									<td width="10%">9</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">2 <img src="flags/austria.png" width="16"> Austria</td>
									<td width="10%">3</td>
									<td width="10%">2</td>
									<td width="10%">0</td>
									<td width="10%">1</td>
									<td width="10%">6</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">3 <img src="flags/ukraine.png" width="16"> Ukraine</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="10%">3</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">4 <img src="flags/north-macedonia.png" width="16"> North Macedonia</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">0</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-12">
						<h4 style="margin-top: 50px;">Group D</h4>
						
						<figure>
							<table>
								<tr>
									<th style="text-align: left;">Club</th>
									<th>MP</th>
									<th>W</th>
									<th>D</th>
									<th>L</th>
									<th>Pts</th>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">1 <img src="flags/england.png" width="16"> England</td>
									<td width="10%">3</td>
									<td width="10%">2</td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="10%">7</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">2 <img src="flags/croatia.png" width="16"> Croatia</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">4</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">3 <img src="flags/czech-republic.png" width="16"> Czech Republic</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">4</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">4 <img src="flags/scotland.png" width="16"> Scotland</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="10%">1</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-12">
						<h4 style="margin-top: 50px;">Group E</h4>
						
						<figure>
							<table>
								<tr>
									<th style="text-align: left;">Club</th>
									<th>MP</th>
									<th>W</th>
									<th>D</th>
									<th>L</th>
									<th>Pts</th>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">1 <img src="flags/sweden.png" width="16"> Sweden</td>
									<td width="10%">3</td>
									<td width="10%">2</td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="10%">7</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">2 <img src="flags/spain.png" width="16"> Spain</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="10%">0</td>
									<td width="10%">5</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">3 <img src="flags/slovakia.png" width="16"> Slovakia</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="10%">3</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">4 <img src="flags/poland.png" width="16"> Poland</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="10%">1</td>
								</tr>
							</table>
						</figure>
					</div>
					
					<div class="col-12">
						<h4 style="margin-top: 50px;">Group F</h4>
						
						<figure>
							<table>
								<tr>
									<th style="text-align: left;">Club</th>
									<th>MP</th>
									<th>W</th>
									<th>D</th>
									<th>L</th>
									<th>Pts</th>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">1 <img src="flags/france.png" width="16"> France</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">2</td>
									<td width="10%">0</td>
									<td width="10%">5</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">2 <img src="flags/germany.png" width="16"> Germany</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">4</td>
								</tr>	
								<tr>
									<td width="50%" style="text-align: left;">3 <img src="flags/portugal.png" width="16"> Portugal</td>
									<td width="10%">3</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">1</td>
									<td width="10%">4</td>
								</tr>
								<tr>
									<td width="50%" style="text-align: left;">4 <img src="flags/hungary.png" width="16"> Hungary</td>
									<td width="10%">3</td>
									<td width="10%">0</td>
									<td width="10%">2</td>
									<td width="10%">1</td>
									<td width="10%">2</td>
								</tr>
							</table>
						</figure>
					</div>
				</div>
			</div>
		</div>
		
		<div id="footer">
			<?php include("footer.php"); ?>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/tabs.js"></script>
	</body>
</html>