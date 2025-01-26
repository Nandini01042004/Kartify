<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kartify</title>
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
    <link rel="icon" href="img/shoppingBag.png">

    <style>
        #navigation {
          	background: #F7C8E0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #654EA3, #EAAFC8);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #654EA3, #EAAFC8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #header {
            background: #F7C8E0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #654EA3, #EAAFC8);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #654EA3, #EAAFC8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #top-header {
            background: #F7C8E0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #654EA3, #EAAFC8);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right,#654EA3, #EAAFC8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        #footer {
            background: #F7C8E0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right,#654EA3, #EAAFC8);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #654EA3, #EAAFC8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #F7C8E0;
        }
        #bottom-footer {
            background: #F7C8E0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #654EA3, #EAAFC8);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #654EA3, #EAAFC8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .footer-links li a {
          color: #F7C8E0;
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
        #shop-cart{
          position: absolute;
          top: 50px;
          right: 150px;
        }   
    </style>
  </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-right">
						<li><?php
                            include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT user_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i>'.$row["user_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>  
                                  </div>
                                </div>';
                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" style="color:black;font-family:copperplate;font-size:20px;"><i class="fa fa-user-o"></i> My Account</a>
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
			<!-- /TOP HEADER -->
			
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container" >
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo" style="border-style:solid;">
								<a href="#"><img src="img/shopzeeKart.PNG"></a>
							</div>
						</div>
						<!-- /LOGO -->
						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix" id="shop-cart" >
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown" >
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
											<i class="fa fa-shopping-cart"></i>
											<p style="color:black;font-family:copperplate;font-size:20px;">Your Cart</p>
											<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list" id="cart_product"></div>
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
										</div>
									</div>
							  </div>
								<!-- /Cart -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<nav id='navigation' >
      <div class="container" id="get_category_home" ></div>
		</nav>
		<!-- NAVIGATION -->
		<div class="modal fade" id="Modal_login" role="dialog" >
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
  </body>
</html>
		