<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		

      function con()
	  {
		var rd1 = document.getElementById('absence_planifiée');
		var rd2 = document.getElementById('absence_antérieure');
		var databs =  document.getElementById('d1');
		var datan =  document.getElementById('d2');


		if(rd1.checked== true && databs=="")
		 	{alert("planifier absance obligatoire");} 
	  }
	  else if(rd2.checked== true && datan=="")
	  {alert("absence antérieure obligatoire");}
	  else
	  {alert("inserted");}

	</script>
</head>
<body>


	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				
			</div>
			<div class="user-notification">
				
			</div>
			<div class="user-info-dropdown">
				
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		
		<div class="right-sidebar-body customscroll">
			

				

				

			
				
				
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Ajouter Rattrapage</h4>
						</div>
						
					</div>

					<form  method="post" action="controller/addrattrapagec.php">

						<div class="form-group">
							<label>Classe </label>
							<input class="form-control" type="text" placeholder="Classe" name="classe">
						</div>
						<div class="form-group">
							<label>Date</label>
							<input class="form-control"  type="date" name="dater">
						</div>
						
						
						<div class="form-group">
							<label>Module</label>
							<input class="form-control"  type="text" name="module">
						</div>
						
						
						<div class="form-group">
							<div class="row">
								
								<div class="col-md-6 col-sm-12">
										
					  
					   
									<label class="weight-600">Motif</label>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" name="motif"  class="w3-radio" id="absence_planifiée" value="absence_planifiée" style=" height: 2em;">

										<label style="margin-left:20px ;">absence planifiée</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio"   name="motif" class="w3-radio" value="absence_antérieure" id="absence_antérieure">
										<label  style="margin-left:20px ;">absence antérieure</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio"  name="motif" class="w3-radio" value="rattrapage">
										<label  style="margin-left:20px ;">rattrapage pour avancement</label>
									</div>
									<div class="form-group">
										<label>Date absence planifiée</label>
										<input class="form-control"  type="date" name="dateabs"  id="d1">
									</div>
									<div class="form-group">
										<label>Date absence antérieure</label>
										<input class="form-control"  type="date" name="dateant"  id="d2">
									</div>
									  
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Nom de Prof(e)</label>
							
							<select name="ens" class="form-control">
								<option selected> Nom de Prof(e) </option>
								<?php
										include 'entities/enseignant.php';
										$enseignant = new Enseignant();
										$res = $enseignant->nomens();
										while($ligne = $res->fetch()){
											echo "<option value='$ligne[0]'>$ligne[1] $ligne[2] </option>";
										}
									?>
								</select>
						</div>
						
						<?php
						  echo '<script type="text/javascript">',
						  'con();',
						  '</script>'
					 ;
						?>
					
						<div class="input-group mb-0">
										
										
										<button class="btn btn-primary btn-lg btn-block" type="submit">Ajouter</button>
									</div>
						
						
					</form>
					
						</div>
					</div>
				</div>
				

			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>