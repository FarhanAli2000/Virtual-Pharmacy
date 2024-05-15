<?php
include('header.php');


include('includes\config.php');
$qry="Select * from product";
$res=mysqli_query($conn,$qry);

?>

<!DOCTYPE html>


	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
	<link href="file:///E:/study/7th%20Semester/FYP%20data/virtual%20pharmacy/Dewi/assets/css/style.css" rel="stylesheet">
	<link href="assets/css/shop.css" rel="stylesheet">
	<link href="assets/css/shopadd.css" rel="stylesheet">
	<link href="assets/css/style6.css" rel="stylesheet">
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<title>Virtual-Pharmacy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/shop.css">
<link rel="stylesheet" href="assets/css/style-starter.css">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<link href="assets/css/login_overlay.css" rel="stylesheet" type="text/css" />
	
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="../../goggles-web_Free07-08-2018_1255464790/web/css/fontawesome-all.css" rel="stylesheet">
	
</head>

<body>


	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				
				<center> <div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						 <a class="navbar-brand " href="index.php">
							Virtual-Pharmacy </a>
					</h1> 
				</div> 
				</center>

				
			</div>
			
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			       <nav class="navbar navbar-expand-lg  bg-dark top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				
				 <nav class="nav-menu d-none d-lg-block navbar-brand  ">
        <ul>

            <li   ><a href="index.php"  >Home</a></li>
           
         
               <form>
            <input type="text" name="search" placeholder="Search..">
              </form>
         
<li>
<li>
	<li> 
		<li>
			<li>
				<li>
					<li>
						<li>
							<li>
								<li>
									<li>
										<li>
											<li>
																	<li>
						<li>
							<li>
								<li>
									<li>
										<li>
											<li>
												<li>
													<li>
														<li>
															<li>



          <a href=""  data-target="#myModal1"  data-toggle="modal" >SIGNUP NOW</a>
          <li>
          	</li>
          	</li>
          	</li>
          	</li>
          	</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>
</li>


</li>
       <li>  <a href=""  data-target="#myModal2"  data-toggle="modal" >SIGNUP NOW</a>
</li>
</li>
</li> 



        </ul>

      </nav>
        
      <!-- .nav-menu -->

			</nav> 
		</header>
    </div>
	<div class="container">
	<div class="row">
	<?php
										while($row=mysqli_fetch_assoc($res)){
										
										?>
		
		  <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
			
                    <img class="card-img-top" src="PharmacyModule/assets/images/<?php echo $row['p_image'];?>">
                    <div class="card-block">
                       <!-- <figure class="profile profile-inline">
                            <img src="https://picsum.photos/200/150/?random" class="profile-avatar" alt="">
                        </figure>-->
                        <h4 class="card-title text-center"><?php  echo $row['p_name'];?></h4>
                        <h4 class="card-title text-center"><?php   echo  $row['p_price'];?></h4>
                        
                         

                          
                        <!-- <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div> -->
                    </div>
                    <div class="card-footer text-center">
                       
 

                        <button class="btn float-center btn-sm " style="background-color: orangered; font-family: Times Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'"> ADD TO CART <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>

<?php
										}
										?>
	</div>
	</div>
	
		<!--jQuery-->
		<script src="js/jquery-2.2.3.min.js"></script>
		<!-- newsletter modal -->
		<!--search jQuery-->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/classie-search.js"></script>
		<script src="js/demo1-search.js"></script>
		<!--//search jQuery-->
		<!-- cart-js -->
		<script src="js/minicart.js"></script>
		<script>
			googles.render();

			googles.cart.on('googles_checkout', function (evt) {
				var items, len, i;

				if (this.subtotal() > 0) {
					items = this.items();

					for (i = 0, len = items.length; i < len; i++) {}
				}
			});
		</script>
		<!-- //cart-js -->
		<script>
			$(document).ready(function () {
				$(".button-log a").click(function () {
					$(".overlay-login").fadeToggle(200);
					$(this).toggleClass('btn-open').toggleClass('btn-close');
				});
			});
			$('.overlay-close1').on('click', function () {
				$(".overlay-login").fadeToggle(200);
				$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
				open = false;
			});
		</script>
		<!-- carousel -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$('.owl-carousel').owlCarousel({
					loop: true,
					margin: 10,
					responsiveClass: true,
					responsive: {
						0: {
							items: 1,
							nav: true
						},
						600: {
							items: 2,
							nav: false
						},
						900: {
							items: 3,
							nav: false
						},
						1000: {
							items: 4,
							nav: true,
							loop: false,
							margin: 20
						}
					}
				})
			})
		</script>

		<!-- //end-smooth-scrolling -->


		<!-- dropdown nav -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //dropdown nav -->
		<script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>



<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 300%;
}
</style>


    <!--// end-smoth-scrolling -->

		<script src="js/bootstrap.js"></script>

		<!-- js file -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Modal HTML -->
<div id="myModal1" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="/examples/actions/confirmation.php" method="post">
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
						   <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
					    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
							<a href="#" class="float-right text-muted"><small>Forgot?</small></a>
    </div>
				</div>
				<div class="modal-footer justify-content-between">
					<label class="form-check-label"><input type="checkbox"> Remember me</label>
					<input type="submit" class="btn btn-dark" value="Login">
				</div>
			</form>
		</div>
	</div>
</div>


</body>

</html>