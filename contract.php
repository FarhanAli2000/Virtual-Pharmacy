<?php
include('includes\config.php');
?>
<?php
if(isset($_POST['submit'])){
	
	$firstname = $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$business_name= $_POST['business_name'];
	$b_type = $_POST['b_type'];
	$email = $_POST['email'];
	$m_budget= $_POST['m-budget'];
	$average_cost= $_POST['average-cost'];
	$muhala= $_POST['muhala'];
	$area= $_POST['area'];
	$city= $_POST['city'];
	$phonenumber= $_POST['phonenumber'];
	$pic= $_FILES['pic']['name'];
	  $temp_name = $_FILES['pic']['tmp_name']; 
	  $folder = 'assets/img/'.$pic;
	move_uploaded_file($temp_name,$folder);
	
	//if($subject_name == '' or $level == '' or $budget == '' or $session_date == '' or $email == ''  or $detail == ''){
	//	$error = "Please Fill Out Required Fields";
	//} else {
		$qry="INSERT INTO `contract`(`f_name`, `l_name`, `email`, `image`, `business_name`, `business_type`, `avg_cost`, `monthly`, `muhala`, `area`, `city`, `contact`) VALUES ('$firstname','$lastname','$email','$pic','$business_name','$b_type','$average_cost','$m_budget','$muhala','$area','$city','$phonenumber')";
	$result=mysqli_query($conn,$qry);
	if($result==TRUE){
	echo "<script>
	
	alert('Request has been submitted successfully');
	
	</script>";
	}
//}
}

?>	         

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>virtual pharmacy | contract</title>

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
	<!-- End Google Tag Manager -->
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg">
	    <!--   Creative Tim Branding   -->
	    <a href="{% url 'main:index' %}">
	         <div class="logo-container">
	            <div class="logo">
	                <!--<img src="assets/img/titlelogo.png">-->
	            </div>
	            <div class="brand">
	                virtual pharmacy
	            </div>
	        </div>
	    </a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form action="#" method="POST" enctype="multipart/form-data">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Partner with us</h3>
									<p class="category">This information will let us know more about you.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												About
											</a>
										</li>
			                            <li>
											<a href="#details" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-list"></i>
												</div>
												Details
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Address
											</a>
										</li>
										 <li>
											<a href="#description" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-pencil"></i>
												</div>
												Description
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Please tell us more about yourself.</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
														 

														<input type="file" name="pic" id="wizard-picture">
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>First Name <small>(required)</small></label>
													<input name="firstname" type="text" class="form-control" placeholder="Enter Name">
												</div>
												<div class="form-group">
													<label>Last Name <small>(required)</small></label>
													<input name="lastname" type="text" class="form-control" placeholder="Enter Name.">
												</div>
												
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="Enter Gmail">
												</div>
											</div>
											
										</div>
		                            </div>
		                       <div class="tab-pane" id="details">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h5 class="info-text"> Let's start with the basic details</h5>
		                                	</div>
			                                <div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Business Name<small>(required)</small></label>
			                                        <input type="text" name="business_name" class="form-control" id="exampleInputEmail1" placeholder="e.g virtual pharmacy">
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                    <div class="form-group">
			                                        <label>Business Type</label>
			                                        <select class="form-control" name="b_type">
			                                            <option disabled="" selected="">-none-</option>
			                                            <option value="Medical-store">Medicle store</option>
			                                            <option value="Pharmacy">pharmacy</option>
			                                        </select>
			                                    </div>
			                                </div>
			                                <div class="col-sm-5 col-sm-offset-1">
			                                    <div class="form-group">
			                                        <label>Average cost of medicine for one person</label>
			                                        <select class="form-control" name="average-cost">
			                                            <option disabled="" selected="">- choose an option -</option>
			                                            <option value="5">5</option>
			                                            <option value="10">10</option>
														<option value="15">15</option>
			                                        </select>
			                                    </div>
			                                </div>
			                                <div class="col-sm-5">
			                                	<div class="form-group">
			                                        <label>Monthly Budget</label>
		                                        	<div class="input-group">
		                                            	<input type="text" class="form-control" name="m-budget">
		                                            	
		                                        	</div>
			                                    </div>
			                                </div>
		                            	</div>
		                        	</div>
		                            <div class="tab-pane" id="address">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Are you living in a nice area? </h5>
		                                    </div>
		                                    <div class="col-sm-7 col-sm-offset-1">
		                                    	<div class="form-group">
		                                            <label>Select area</label>
		                                            <input type="text" class="form-control" placeholder="Select Area" name="muhala">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-3">
		                                        <div class="form-group">
		                                            <label>Select Area</label><br>
		                                            <select name="area" class="form-control">
		                                                <option value="DHA"> DHA </option>
		                                                <option value="joher town"> joher town </option>
		                                                <option value="modal town"> modal town </option>
		                                                <option value="iqbal town">iqbal town</option>
		                                                <option value=" EME"> EME </option>
		                                                <option value="Bahria town"> Bahria town </option>
		                                                <option value="Sabzazar"> Sabzazar </option>
		                                                <option value="Riwend"> Riwend </option>
		                                              
		                                            </select>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                        <div class="form-group">
		                                            <label>City</label>
		                                            <input type="text" class="form-control" placeholder="Lahore..." name="city">
		                                        </div>
		                                    </div>
											<div class="col-sm-5 col-sm-offset-1">
											<div class="form-group">
													<label>Contact Number <small>(required)</small></label>
													<input name="phonenumber" type="varchar" class="form-control" placeholder="+9213456789">
												</div>
											</div>
		                                  
		                                </div>
		                            </div>
									<div class="tab-pane" id="description">
		                                <h5 class="info-text">sign the contract</h5>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-4 col-sm-offset-2">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <!--<input type="file" name="jobb" value="upload"-->
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-file"></i>
															<p>upload contract file</p>
															
		                                                </div>
														<input type="file" name="jobb" value="upload">
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-calendar"></i>
															<p>download contract form </p>
															<a href="file:///D:/study/R%20DATA/Assignment#4 ppit.docx" download> 
         <button type="button">Download</button> 
         </a> 
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type="button" class="btn btn-next btn-fill btn-warning btn-wd" name="next" value="Next" />
		                                <input type="submit" class="btn btn-finish btn-fill btn-warning btn-wd" name="submit" value="Finish" />
		                            </div>

		                            <div class="pull-left">
		                                <input type="button" class="btn btn-previous btn-default btn-wd" name="previous" value="Previous" />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
								
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

		<div class="fixed-plugin">
			<div class="dropdown open">
				<a href="#" data-toggle="dropdown">
					<i class="fa fa-cog fa-2x"> </i>
				</a>
				<ul class="dropdown-menu">
				<!--	<li class="header-title">Examples</li>
					<li class="active">
						<a href="wizard-create-profile.html">
						   <img src="assets/img/wizard-create-profile.png">
						   Create Profile
						</a>
					</li>
					<li>
						<a href="wizard-find-desk.html">
						   <img src="assets/img/wizard-find-desk.png">
						   Find Desk
						</a>
					</li>
					<li>
						<a href="wizard-list-place.html">
						   <img src="assets/img/wizard-list-place.png">
						   List Your Place
						</a>
					</li>-->
					<li class="header-title">Colors</li>
					<li class="adjustments-line">
						<a href="javascript:void(0)" class="switch-trigger">
							<div class="text-center">
								<span class="badge filter badge-blue" data-color="blue"></span>
								<span class="badge filter badge-azure" data-color="azure"></span>
								<span class="badge filter badge-green" data-color="green"></span>
								<span class="badge filter badge-orange active" data-color="oranged"></span>
								<span class="badge filter badge-red" data-color="red"></span>
							</div>
							<div class="clearfix"></div>
						</a>
					</li>
				  <!-- <li class="tutorial">
						<div class="text-center">
							<a href="documentation/elements.html" target="_blank" class="btn btn-default btn-fill btn-block">Documentation</a>
						</div>
					</li>-->
					
				</ul>
			</div>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
