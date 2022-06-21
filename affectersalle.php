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


	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>

</head>
<body>
<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="src/images/dep.jpg" style="width: 200px;height:70px;border-radius:5px;" alt="" class="light-logo"></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> 

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				
			</div>
		</div>
		
	</div>



	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="src/images/dep.jpg" alt="" class="dark-logo">
				<img src="src/images/dep.jpg" style="width: 100%;height:70px; margin-left:20px" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
	</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
			
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Formulaire</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Affecter Salle</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
						
						</div>
					</div>
				</div>	


	

				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					
					<form         method="post" action="controller/reponserattrapage.php">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Id Rattrappage</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="number" name="idr">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Salle</label>
							<div class="col-sm-12 col-md-10">
							<select name="salle" class="form-control">
								<option selected>Salle </option>
								<?php
										include 'entities/salle.php';
										$salle = new Salle();
										$res = $salle->nomsalle();
										while($ligne = $res->fetch()){
											echo "<option value='$ligne[0]'>$ligne[0]  </option>";
										}
									?>
								</select>
                                    </div>
						</div>
						
						
						
						</div>
						<div class="input-group mb-0">
										
										
										<button class="btn btn-primary btn-lg btn-block" type="submit">Repondre</button>
									</div>
						
					</form>
				
				</div>
				<!-- Default Basic Forms End -->

				
				

				
					

				
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>