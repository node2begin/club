<?php
	session_start();
	include_once("../resources/connection.php");
	$title="Club verifivation request";
	$desc="Shows all the verifivation reuestion are send by the club";
	if(!isset( $_SESSION['aid']))
	{
		header("location:login.php");
	}

	if(isset($_GET['vid'])){

		$vid=$_GET['vid'];
		$qry="update `tblclubverireq` set `Status` = 1 - `Status` where `ClubVerificationReqID` = $vid";
		mysqli_query($con,$qry) or die(mysqli_error($con));
	}

	$qry="select req.*,c.* from tblclubverireq req join tblclub c on c.ClubID=req.ClubID";
	$r=mysqli_query($con,$qry) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$title?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		<?php include_once('topscript.php'); ?>
	</head>
	<body>
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<?php include_once('nav.php');?>
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<?php include_once('sidebar.php') ?>
						<div class="pcoded-content">

							<div class="page-header card">
								<div class="row align-items-end">
									<div class="col-lg-8">
										<div class="page-header-title">
											<i class="feather icon-home bg-c-blue"></i>
											<div class="d-inline">
											<h5><?= $title?></h5>
											<span><?= $desc ?></span>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="page-header-breadcrumb">
											<ul class=" breadcrumb breadcrumb-title">
												<li class="breadcrumb-item">
												<a href="index.html"><i class="feather icon-home"></i></a>
												</li>
												<li class="breadcrumb-item"><?= $link ?> </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						
							<!-- CB starts -->
							<div class="pcoded-inner-content">
								<div class="main-body">
									<div class="page-wrapper">
										<div class="page-body">
											<div class="card-block">
												<div class="dt-responsive table-responsive">
													<table id="order-table" class="table table-striped table-bordered nowrap">
														<thead>
															<tr>
																<th>Club Name</th>
																<th>Status</th>
																<th>Respondend Admin</th>
																<th>Proof</th>
																<th>View More</th>
															</tr>
														</thead>
														<tbody>
															<?php
																if(mysqli_num_rows($r)>0){
															        while($ROW=mysqli_fetch_array($r)){
															?>
																<tr>
																	<td><?=$ROW['Name']?></td>
																	<td>
																		<a href="club_veri_req.php?vid=<?= $ROW['0'] ?>">
																			<?php
																				if($ROW['Status'])
																					echo "block";
																				else
																					echo "active";
																			?>
																		</a>
																	</td>
																	<td><?=$ROW['AdminID']?></td>
																	<td>
																		<img src="../files/image/<?= $ROW['Proof']?>" height="50px" width="50px"/>
																	</td>
																	<td><a href="club_info.php?cid=<?= $ROW['0'] ?>">view more</a></td>
																</tr>
															<?php
															        }
															    }
															?>
														</tbody>
														<tfoot>
															<tr>
																<th>Club Name</th>
																<th>Status</th>
																<th>Respondend Admin</th>
																<th>Proof</th>
																<th>View More</th>
															</tr>
														</tfoot>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- CB Ends -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('Bottom.php') ?>
	</body>
</html>
