<html lang="en">
<head>
	<title>Admindek | Admin Template</title>


	<?php include_once('scripts.php');?>

</head>
<body>

	<div class="loader-bg">
		<div class="loader-bar"></div>
	</div>

	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">

			<?php include_once("header.php"); ?>

			 <div class="pcoded-main-container">
				<div class="pcoded-wrapper">
					
					<?php include_once("aside.php"); ?>

				<div class="pcoded-content">

					<div class="page-header card">
						<div class="row align-items-end">
							<div class="col-lg-8">
								<div class="page-header-title">
									<i class="feather icon-home bg-c-blue"></i>
									<div class="d-inline">
										<h5>Dashboard</h5>
										<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4">
								<div class="page-header-breadcrumb">
									<ul class=" breadcrumb breadcrumb-title">
										<li class="breadcrumb-item">
											<a href="index.php"><i class="feather icon-home"></i></a>
										</li>
										<li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="pcoded-inner-content">
						<div class="main-body">
							<div class="page-wrapper">
								<div class="page-body">
									<div class="row">
										<div class="col-sm-12">.
											<div class="card">
												<div class="card-header">
													<h5>Complaits</h5>
												</div>
												<div class="card-block">
													<div class="dt-responsive table-responsive">
														<table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
															<thead>
																<tr>
																	<th>Complain</th>
																	<th>Username</th>
																	<th>Created Date</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	foreach ($cmp as $key) 
																	{
																?>
																<tr>
																	<td><?= $key->Complain ?></td>
																	<td><?= $key->Username ?></td>
																	<td><?= $key->CreatedDt ?></td>
																</tr>	
																<?php
																	}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="styleSelector">
				</div>

			</div> 
		</div>
	</div>
</div>

<?php include_once("scripts.php") ?>

</body>

</html>
