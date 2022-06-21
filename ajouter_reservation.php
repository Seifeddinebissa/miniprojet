<?php 
include('includes/connect_db.php');

session_start();
if (empty($_SESSION['id_ens'])) {
header('Location:login.php');
}else{


?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>ISETN</title>

<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/iset.png">
<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/iset.png">
<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/iset.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	 <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="src/images/iset.png" style="width: 200px;height:70px;border-radius:5px;" alt="" class="light-logo"></div>
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
				<form >
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			
			
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Ross C. Lopez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="includes/deconnexion.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>	
			</div>
			
		</div>
	</div>	



	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="src/images/iset.png" alt="" class="dark-logo">
				<img src="src/images/iset.png" style="width: 200px;height:70px;margin-left:28px;" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
			
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-invoice"></span><span class="mtext">Reservation</span>
						</a>
						<ul class="submenu">
							<li><a href="ajouter_reservation.php">Ajouter</a></li>
							<li><a href="consulter_demande_ens.php">Consulter</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-video-player-1"></span><span class="mtext">Reclamation</span>
						</a>
						<ul class="submenu">
							<li><a href="ajouter_reclamation.php">Ajouter</a></li>
							<li><a href="liste_reclamation_ens.php">Consulter</a></li>
						</ul>
					</li>
					
					
					<li>
						<div class="dropdown-divider"></div>
					</li>
				
				
				</ul>
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
									<li class="breadcrumb-item active" aria-current="page">Réservation</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
						
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					
					<form action="controller/AjouterReservation.php?id=<?php echo $_SESSION['id_ens'] ?>" method="POST" >
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="date" name="date">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Heure</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control time-picker" placeholder="Selectionner l'heure " type="text" name="heure">
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label"> Qu'est-ce que tu peux réserver?</label>
							<div class="col-sm-12 col-md-10">
							<div class="custom-control custom-radio mb-5">
								<input type="radio" id="customRadio1" name="radio" class="custom-control-input" value="projecteur">
								<label class="custom-control-label" for="customRadio1">Video projecteur</label>
							</div>
							<div class="custom-control custom-radio mb-5">
								<input type="radio" id="customRadio2" name="radio" class="custom-control-input" value="salle">
								<label class="custom-control-label" for="customRadio2">Salle</label>
							</div>
							</div>
						</div>
						<!-- <div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Salle</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12">
									<option selected="">Selectionner...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Video projecteur</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12">
									<option selected="">Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div> -->

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Activité ou module</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="activite">
							</div>
						</div>

						
						<div class="text-center">
						<p class="text-center">
						<button class="btn btn-success" type="submit">Ajouter</button>
						<button class="btn btn-danger" type="reset">Annuler</button></p>
						</div>
					</form>
					
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
<?php } ?>