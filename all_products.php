<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
include('includes\config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Shopping Cart</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">

<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">


<style>
        #navigation {
          background: #FF4E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          
        }
        #header {
  
            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        

       
        
        </style>
</head>
<body>
            <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                
            </div>
 
                <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="index.php" class="logo">
                                <font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                        Virtual Pharamcay
                                    </font>
                                    
                                </a>
                            </div>
                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        <div class="col-md-6">
                            <div class="header-search">
                               
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
            </div>
<div class="container">
    <h1>PRODUCTS</h1>
	
    <!-- Cart basket -->
    <div class="cart-view">
        <a href="viewCart.php" title="View Cart" > <i class="fas fa-shopping-cart"></i>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':'Empty'; ?>)</a>
    </div>
    
    <!-- Product list -->
    <div class="row col-lg-12">
        <?php 
        // Get products from database 
        $result = $conn->query("SELECT * FROM products ORDER BY id DESC LIMIT 10"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
        <div class="card col-lg-4">
            <div class="card-body">
                 
                                <img src="./PharmacyModule/assets/images/<?php echo $row['image'];?>" width="250px" height="170px" alt="">
                            
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo '$'.$row["price"].' USD'; ?></h6>
                <p class="card-text"></p>
                <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">Add to Cart <i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/actions.js"></script>
        <script src="js/sweetalert.min"></script>
        <script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
</body>
</html>