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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center" >
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
				<img src="vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5" >
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Creer Copmte</h2>
						</div>
						<form method="post" action="controller/addRegister.php">
						
					   <label class="col-sm-4 col-form-label">Profil:</label>
						
                        <input type="radio" name="profil"  class="w3-radio" value="enseignant"> <label style="margin-left:10px" >Enseignant</label>
						<br>
						<input type="radio" name="profil" class="w3-radio" value="secretaire" style="margin-left:125px"><label style="margin-left:10px" >Secretaire</label>
						<br>
						<input type="radio" name="profil" class="w3-radio" value="technicien"style="margin-left:125px"><label style="margin-left:10px;margin-bottom: 30px; " >Technicien</label>
                        
						<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="nom" required="required">
											</div>
                                         </div>	
										 <div class="form-group row">
											<label class="col-sm-4 col-form-label">Prenom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="prenom" required="required">
											</div>
                                         </div>	
										 <div class="form-group row">
											<label class="col-sm-4 col-form-label">Nom utilisateur* </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="username" required="required">
											</div>
                                         </div>	
										 <div class="form-group row">
											<label class="col-sm-4 col-form-label">Telephone</label>
											<div class="col-sm-8">
												<input type="number" class="form-control" name="tel">
											</div>
                                         </div>	
										 <div class="form-group row">
											<label class="col-sm-4 col-form-label" >Email*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="email" required="required">
											</div>
                                         </div>	
										 <div class="form-group row">
											<label class="col-sm-4 col-form-label">Mot de Passe*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="password"required="required">
											</div>
                                         </div>	
										 <div class="col-sm-12">
									<div class="input-group mb-0">
										
										
										<button class="btn btn-primary btn-lg btn-block" type="submit">Creer Compte</button>
									</div>
									
								</div>


                        </div>					
							
							
							
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>

