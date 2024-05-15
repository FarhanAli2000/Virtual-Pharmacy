<?php
session_start();
include('includes\config.php');
$cid=$_GET['cid'];
$id=$_GET['id'];
$qry="Select * from product where p_id='$id'";
$res=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($res);

?>



<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Buy Products</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

		
         
		
		
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
                <div class="container">
                    
                    <ul class="header-links pull-right">
                        
                        <li><?php
                             // include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                                             ?>
                               
                                </li>               
                    </ul>
                    
                </div>
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
                                <form>
                                    <select class="input-select">
                                        <option value="0">All Categories</option>
                                        <option value="1">Men</option>
                                        <option value="1">Women </option>
                                    </select>
                                    <input class="input" id="search" type="text" placeholder="Search here">
                                    <button type="submit" id="search_btn" class="search-btn">Search</button>
                                </form>
                            </div>
                        </div>
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                

                                <!-- Cart -->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Your Cart</span>
                                        <div class="badge qty">0</div>
                                    </a>
                                    <div class="cart-dropdown"  >
                                        <div class="cart-list" id="cart_product">
                                        
                                            
                                        </div>
                                        
                                        <div class="cart-btns">
                                                <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
                                            
                                        </div>
                                    </div>
                                        
                                    </div>
                                <!-- /Cart -->

                                <!-- Menu Toogle -->
                                <div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
            </div>
            <nav id='navigation'>
            <!-- container -->
            <div class="container" id="get_category_home">
                
            </div>
                <!-- responsive-nav -->
                
            <!-- /container -->
        </nav>
            

        <!-- NAVIGATION -->
        
        <div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
                                                    
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>
                                                    
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>

                        </div>
                      </div>
        
        
            <div class="container" id="get_category_home">
        
            
            
                <!-- responsive-nav -->
                <div id="responsive-nav" >
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav " >
                    <li class="active"><a href="index.php">All</a></li>
                    <li><a href="">Medicine</a></li>
    
                    
                    
                               <li class="categoryhome" cid="2"><a href="">Personal Care</a></li>
                    
            
                    
                    
                               <li class="categoryhome" cid="3"><a href="">Family care</a></li>
                    
            
                    
                    
                               <li class="categoryhome" cid="4"><a href="">Accessories</a></li>
                    
            
                    
                    
                               <li class="categoryhome" cid="5"><a href="">Fitness</a></li>
                    
            
                    
                    
                               <li class="categoryhome" cid="6"><a href="">Devices</a></li>
                    
                    
            </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
               
            </div>
<table class="table">
  <thead>
    <tr>
          <th scope="col">Product Name</th>
       <th scope="col">Product</th>
      <th scope="col">Price</th>
    
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><?php echo $row['p_name'];?></td>
       <td> <img src='./PharmacyModule/assets/images/<?php echo $row['p_image'];?>' style='height:100px;width:100px;' alt=''></td>
        <td><?php echo $row['p_price'];?></td>
      <td><?php echo $row['p_price'];?></td>
      <td></td>

    </tr>
  
  </tbody>

</table>
  <a href="place_order.php?pid=<?php echo $row['p_id'];?>&cid=<?php echo $cid;?>"><button type="button" name="placeorder"class="btn btn-danger" style="float:right;">Place Order</button></a>
