<?php
include("includes/connect_db.php");
$res = $bdd->query("select * from reservation");
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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/bootstrap.min.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
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
			
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
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
			
					<li>
						<a href="consulter_demande.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Réservation</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-video-player-1"></span><span class="mtext">Projecteur</span>
						</a>
						<ul class="submenu">
							<li><a href="ajouter_projecteur.php">Ajouter</a></li>
							<li><a href="liste_projecteur.php">Consulter</a></li>
						</ul>
					</li>
					
					<li>
						<a href="liste_reclamation_ad.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-settings"></span><span class="mtext">Réclamation</span>
						</a>
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
								<h4>Liste</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb" style="background-color: white;">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Reservation</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					
					<div class="pb-20" style="padding-top: 20px;">
						<table class="data-table table stripe hover nowrap">
							<thead>

								<tr>
									<th>Enseignant</th>
									<th class="table-plus datatable-nosort">Date</th>
									<th>Heure</th>
									<th>Activité</th>
									<th>Type</th>
									<th>Etat</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($ligne = $res->fetch()) {
									$iddd = $ligne['id_ens'];
									$rs = $bdd->query("select * from enseignant where id_ens = $iddd");
									$id = $ligne['id_reservation'];
									$res1 = $bdd->query("select * from reponsereservation rp, reservation re where rp.id_reservation = $id");
									$ligne1 = $res1->fetch();
									$ligne2 = $rs->fetch();
								?>
									<tr>
										<td><?php echo $ligne2['nom_ens']," ",$ligne2['prenom_ens'] ?></td>
										<td class="table-plus"><?php echo $ligne['date'] ?></td>
										<td><?php echo $ligne['heure'] ?></td>
										<td><?php echo $ligne['activite'] ?></td>
										<td><?php echo $ligne['type'] ?></td>
										<td><?php
											if ($ligne1['etat'] == -1) {
												echo "<span class='badge badge-danger'>réfuser</span>";
											} else if ($ligne1['etat'] == 0) {
												echo "<span class='badge badge-warning'>en attente</span>";
											} else
												echo "<span class='badge badge-success'>accepté</span>";

											?></td>
										<td>
											<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#" data-toggle="modal" data-target="<?php
														if($ligne['type'] == "projecteur")
															echo "#editmodal"; 
														else
															echo "#editmodalsalle";
												?>" data-whatever="<?php echo $ligne['id_reservation']; ?>"><i class="dw dw-edit2"></i> Accepter</a>
												<a class="dropdown-item" href="controller/RefuserReservation.php?id=<?php  echo $ligne['id_reservation'] ?>"><i class="dw dw-cancel"></i> Refuser</a>
												<a class="dropdown-item" href="controller/supprReservation.php?id=<?php  echo $ligne['id_reservation'] ?>"><i class="dw dw-delete-3"></i> Supprimer</a>
											</div>
										</div>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
						<!--  ####################################begin Modal projecteur########################################### -->

						<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Projecteur</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<?php
											$rs = $bdd->query("SELECT * FROM videoprojecteur WHERE etat = 0" );
										?>
										<form action="controller/affectersalle.php" method="POST">
											<div class="form-group">
												<input type="number" hidden class="form-control" id="id" name="idt">
											</div>
											<div class="form-group">

												<label for="exampleFormControlSelect1">Selectionner un video projecteur</label>
												<select class="form-control" id="exampleFormControlSelect1" name="vp">
													<?php while($ligne2 = $rs->fetch()){ ?>
													<option value=<?php echo $ligne2['id_vp'] ?> ><?php echo $ligne2['id_vp'] ?></option>
													<?php }?>
												</select>
											</div>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Sauvegarder</button></form>
									</div>
								</div>
							</div>
						</div>
						<!--  ####################################end Modal########################################### -->

						<!--  ####################################begin Modal Salle########################################### -->

						<div class="modal fade" id="editmodalsalle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Salle</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<?php
											$rs = $bdd->query("SELECT * FROM salle WHERE etat = 0" );
										?>
										<form action="controller/affectersalle.php" method="POST">
											<div class="form-group">
												<input type="number" hidden class="form-control" id="id" name="idt">
											</div>
											<div class="form-group">

												<label for="exampleFormControlSelect1">Selectionner une salle</label>
												<select class="form-control" id="exampleFormControlSelect1" name="salle">
													<?php while($ligne2 = $rs->fetch()){ ?>
													<option value="<?php echo $ligne2['num_salle'] ?>" ><?php echo $ligne2['num_salle'] ?></option>
													<?php }?>
												</select>
											</div>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Sauvegarder</button>
									</form>
									</div>
								</div>
							</div>
						</div>
						<!--  ####################################end Modal########################################### -->
					</div>
				</div>
				<!-- Simple Datatable End -->
				<!-- multiple select row Datatable start -->

				<!-- Export Datatable End -->
			</div>
			
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="vendors/scripts/bootstrap.min.js"></script>
	<script src="vendors/scripts/"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>
	<script>
		$('#editmodal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget)
			var value = button.data('whatever')
			var modal = $(this)
			modal.find('#id').val(value);
		});
		$('#editmodalsalle').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget)
			var value = button.data('whatever')
			var modal = $(this)
			modal.find('#id').val(value);
		})
		
	</script>
</body>

</html>