
   <div class="main main-raised" style="background-color: #F7C8E0;">
        <div class="container mainn-raised" style="width:100%;">
  				<div id="myCarousel" class="carousel slide" data-ride="carousel"></div>
				</div>
    		<!-- SECTION -->
				<div class="section mainn mainn-raised" style="border-style:solid;">
					<!-- container -->
					<div class="container">
						<!-- row -->
						<div class="row">
							<!-- shop -->
							<div class="col-md-4 col-xs-6" style="border-style:inset;">
								<a href="product.php?p=78"><div class="shop">
									<div class="shop-img">
										<img src="./img/shop01.png" alt="">
									</div>
									<div class="shop-body">
										<h3 style="color:black;font-family:Lucida Handwriting">Laptop<br>Collection</h3>
										<a href="product.php?p=78" class="cta-btn" style="color:black;">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div></a>
							</div>
					<!-- /shop -->

					<!-- shop -->
							<div class="col-md-4 col-xs-6" style="border-style:inset;">
								<a href="product.php?p=72"><div class="shop">
									<div class="shop-img">
										<img src="./img/shop03.png" alt="">
									</div>
									<div class="shop-body">
										<h3 style="color:black;font-family:Lucida Handwriting">Accessories<br>Collection</h3>
										<a href="product.php?p=72" class="cta-btn" style="color:black;">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div></a>
							</div>
					<!-- /shop -->

					<!-- shop -->
							<div class="col-md-4 col-xs-6" style="border-style:inset;">
								<a href="product.php?p=79"><div class="shop">
									<div class="shop-img">
										<img src="./img/shop02.png" alt="">
									</div>
									<div class="shop-body">
										<h3 style="color:black;font-family:Lucida Handwriting">Cameras<br>Collection</h3>
										<a href="product.php?p=79" class="cta-btn" style="color:black;">Shop now <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div></a>
							</div>
						</div>
					</div>
				</div>
		  
		

		<!-- SECTION -->
		<div class="section" style="border-style:solid;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title" style="font-family:Georgia;">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1" style="color:black;" >Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1" style="color:black;">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1" style="color:black;">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1" style="color:black;">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised" style="border-style:solid;">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
										$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                		$run_query = mysqli_query($con,$product_query);
                		if(mysqli_num_rows($run_query) > 0)
										{

											while($row = mysqli_fetch_array($run_query))
											{
													$pro_id    = $row['product_id'];
													$pro_cat   = $row['product_cat'];
													$pro_brand = $row['product_brand'];
													$pro_title = $row['product_title'];
													$pro_price = $row['product_price'];
													$pro_image = $row['product_image'];
													$cat_name = $row["cat_title"];
                        	echo "                
													<div class='product'>
														<a href='product.php?p=$pro_id'><div class='product-img'>
															<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
														</div></a>
														<div class='product-body'>
															<p class='product-category'>$cat_name</p>
															<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
															<h4 class='product-price header-cart-item-info'>Rs.$pro_price</h4>
															<div class='product-rating'>
																<i class='fa fa-star'></i>
																<i class='fa fa-star'></i>
																<i class='fa fa-star'></i>
																<i class='fa fa-star'></i>
																<i class='fa fa-star'></i>
															</div>
														</div>
														<div class='add-to-cart'>
															<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
														</div>
													</div>";
											};
      
										}
									?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section mainn mainn-raised" style="border-style:dotted;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<h2 class="text-uppercase" style="font-family: copperplate;">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="store.php" style="color:black;">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<!-- SECTION -->
		<div class="section" style="border-style:solid;">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title" style="font-family:Georgia;">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2" style="color:black;">Formals</a></li>
									<li><a data-toggle="tab" href="#tab2" style="color:black;">Shirts</a></li>
									<li><a data-toggle="tab" href="#tab2" style="color:black;">T-Shirts</a></li>
									<li><a data-toggle="tab" href="#tab2" style="color:black;">Pants</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised" style="border-style:solid;">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';        
										$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
													$run_query = mysqli_query($con,$product_query);
													if(mysqli_num_rows($run_query) > 0)
													{
															while($row = mysqli_fetch_array($run_query))
															{
																	$pro_id    = $row['product_id'];
																	$pro_cat   = $row['product_cat'];
																	$pro_brand = $row['product_brand'];
																	$pro_title = $row['product_title'];
																	$pro_price = $row['product_price'];
																	$pro_image = $row['product_image'];
																	$cat_name = $row["cat_title"];
																	echo "							
																	<div class='product'>
																		<a href='product.php?p=$pro_id'><div class='product-img'>
																			<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
																		</div></a>
																		<div class='product-body'>
																			<p class='product-category'>$cat_name</p>
																			<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
																			<h4 class='product-price header-cart-item-info'>Rs.$pro_price</h4>
																			<div class='product-rating'>
																				<i class='fa fa-star'></i>
																				<i class='fa fa-star'></i>
																				<i class='fa fa-star'></i>
																				<i class='fa fa-star'></i>
																				<i class='fa fa-star'></i>
																			</div>
																		</div>
																		<div class='add-to-cart'>
																			<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
																		</div>
																	</div>";
															};
  												}
									?>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
