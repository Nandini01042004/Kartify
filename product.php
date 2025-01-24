<?php
include "header.php";
?>
		<!-- /BREADCRUMB -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
		<script>
    
    (function (global) {
			if(typeof (global) === "undefined")
			{
				throw new Error("window is undefined");
			}
    	var _hash = "!";
    	var noBackPlease = function ()
			{
        global.location.href += "#";
				// making sure we have the fruit available for juice....
				// 50 milliseconds for just once do not cost much (^__^)
      	  global.setTimeout(function () {global.location.href += "!";}, 50);
    	};	
			// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>

		<!-- SECTION -->
		<div class="section main main-raised" >
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					
					<?php 
								include 'db.php';
								$product_id = $_GET['p'];
								
								$sql = " SELECT * FROM products ";
								$sql = " SELECT * FROM products WHERE product_id = $product_id";
								if (!$con) {
									die("Connection failed: " . mysqli_connect_error());
								}
								$result = mysqli_query($con, $sql);
								if (mysqli_num_rows($result) > 0) 
								{
									while($row = mysqli_fetch_assoc($result)) 
									{
									echo '                                      
                      	        <div class="col-md-5 col-md-push-2">
                                <div id="product-main-img">
                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>
                                </div>
                            </div>
                                
                                <div class="col-md-2  col-md-pull-5">
                                <div id="product-imgs">
                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'g" alt="">
                                    </div>

                                    <div class="product-preview">
                                        <img src="product_images/'.$row['product_image'].'" alt="">
                                    </div>
                                </div>
                            </div>
									';  
					?>
					<!-- FlexSlider -->				
					<?php 
									echo '
                    <div class="col-md-5" style="border:solid;">
										<div class="product-details">
										<h2 class="product-name">'.$row['product_title'].'</h2>
										<div>
												<div class="product-rating">
													<i class="fa fa-star" style="color: gold;"></i>
													<i class="fa fa-star" style="color: gold;"></i>
													<i class="fa fa-star" style="color: gold;"></i>
													<i class="fa fa-star" style="color: gold;"></i>
													<i class="fa fa-star-o" style="color: gold;"></i>
												</div>
												<a class="review-link" href="#review-form">10 Review(s) | Add your review</a>
										</div>
										<div>
											<h3 class="product-price" style="color:black;">Rs.'.$row['product_price'].'</h3>
											<span class="product-available" style="color:black;">In Stock</span>
										</div>
							<div class="add-to-cart">
								<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
									<button class="add-to-cart-btn" pid="'.$row['product_id'].'"  id="product" style="color:black;"><i class="fa fa-shopping-cart"></i> add to cart</button>
              	</div>
							</div>
							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Accessories</a></li>
								<li><a href="#">Smartphones</a></li>
							</ul>
							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-12">
						<div id="product-tab">
							<ul class="tab-nav">
								<li style="border:dotted;"><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
							</ul>
								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star" style="color: gold;"></i>
														<i class="fa fa-star" style="color: gold;"></i>
														<i class="fa fa-star" style="color: gold;"></i>
														<i class="fa fa-star" style="color: gold;"></i>
														<i class="fa fa-star-o" style="color: gold;"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star-o" style="color: gold;"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star-o" style="color: gold;"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star-o" style="color: gold;"></i>
															<i class="fa fa-star-o" style="color: gold;"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star-o" style="color: gold;"></i>
															<i class="fa fa-star-o" style="color: gold;"></i>
															<i class="fa fa-star-o" style="color: gold;"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
														<i class="fa fa-star" style="color: gold;"></i>
														<i class="fa fa-star-o" style="color: gold;"></i>
														<i class="fa fa-star-o" style="color: gold;"></i>
														<i class="fa fa-star-o" style="color: gold;"></i>
														<i class="fa fa-star-o" style="color: gold;"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews" style="color:black;font-family:Lucida Handwriting">
												<ul class="reviews">
													<li>
														<div class="review-heading"">
															<h5 class="name">Amar</h5>
															<p class="date">18 DEC 2022, 10:00 AM</p>
															<div class="review-rating">
																<i class="fa fa-star" style="color: gold;"></i>
																<i class="fa fa-star" style="color: gold;"></i>
																<i class="fa fa-star" style="color: gold;"></i>
																<i class="fa fa-star" style="color: gold;"></i>
																<i class="fa fa-star-o empty" style="color: gold;"></i>
															</div>
														</div>
														<div class="review-body">
															<p>The materials used are of the highest caliber and are built to last, with no corners cut in the manufacturing process. From the moment you hold it in your hands, you can feel the sturdiness and attention to detail that went into making it.</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">Sita</h5>
															<p class="date">30 JUL 2018, 1:45 PM</p>
															<div class="review-rating">
																<i class="fa fa-star" style="color: gold;"></i>
																<i class="fa fa-star" style="color: gold;"></i>
																<i class="fa fa-star" style="color: gold;"></i>
																<i class="fa fa-star-o empty" style="color: gold;"></i>
															</div>
														</div>
														<div class="review-body">
															<p>The finish is flawless and the overall construction is rock-solid. It is clear that the company behind this product has a commitment to producing goods that not only meet, but exceed, customer expectations. If you are looking for a product that will stand the test of time, this is definitely one worth considering.</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:10 PM</p>
															<div class="review-rating">
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star" style="color: gold;"></i>
															<i class="fa fa-star-o empty" style="color: gold;"></i>
															</div>
														</div>
														<div class="review-body">
															<p>I recently purchased this product and I have to say, I am extremely impressed. From the moment I started using it, I could tell that this was a well-made and high-quality product. Not only does it look great, but it performs flawlessly as well.</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3 mainn" style="border:dotted;">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn" style="color:black;">Submit</button>
												</form>
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
		<div class="section main main-raised" style="border:solid;">

			<div class="container">
				<!-- row -->
				<div class="row">
                    
					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
							
						</div>
					</div>
                    ';
									$_SESSION['product_id'] = $row['product_id'];
									}
								} 
								?>	
								<?php
                    include 'db.php';
								$product_id = $_GET['p'];
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN $product_id AND $product_id+3";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                <div class='col-md-3 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
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
										<div class='product-btns'>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                                </div>";
															};
      
}
?>
				</div> 
			</div>
		</div>
<?php
include "newslettter.php";
include "footer.php";

?>
