<?php
	session_start();
	$title="Add Club";
	$desc="Add new club";
    include_once("../resources/connection.php");
	if(!isset( $_SESSION['aid']))
	{
		header("location:login.php");
	}

	if(isset($_POST['btnAdd'])){
		$cname=$_POST['name'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$img=$_FILES['img']['name'];
		$i=copy($_FILES['img']['tmp_name'],'../files/image/'.$img) or die("Image not uploaded");
		$addr=$_POST['addr'];
		$lurl=$_POST['lurl'];
		if($i){
			$qry="insert into tblclub(Name,States,CityID,ProfileImage,Address,LocationURL) values('$cname',$state,$city,'$img','$addr','$lurl')";
			if(mysqli_query($con,$qry))
				header("location:club.php");
			else
				echo "Not inserted";	
		}else
			echo "File not uploaded";

	}
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
                                            	<a href="club.php" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 text-decoration-none">View Club</a>
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
											<div class="card">
												<div class="card-header">
													<h5>Add Club</h5>
												</div>
												<div class="card-block">
													<form id="main" method="post" action="add_club.php" enctype="multipart/form-data">
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">name</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" name="name">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">state</label>
															<div class="col-sm-10">
																<select name="state" class="form-control">
																	<option value="-1">1</option>
																</select>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">city</label>
															<div class="col-sm-10">
																<select name="city" class="form-control">
																	<option value="-1">1</option>
																</select>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">Select Image</label>
															<div class="col-sm-10">
																<input type="file" class="form-control" name="img">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">Address</label>
															<div class="col-sm-10">
																<textarea class="form-control" name="addr"></textarea> 
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2 col-form-label">LocationURL</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" name="lurl">
															</div>
														</div>
														<div class="form-group row">
															<label class="col-sm-2"></label>
															<div class="col-sm-10">
																<button type="submit" class="btn btn-primary m-b-0" name="btnAdd">Submit</button>
															</div>
														</div>
													</form>
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
