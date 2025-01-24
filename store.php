<?php
include 'header.php';
?>
    <script id="jsbin-javascript">
			(function (global)
			{
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
					global.setTimeout(function () 
					{
						global.location.href += "!";
					}, 50);
    		};	
	// Earlier we had setInerval here....
				global.onhashchange = function () 
				{
						if (global.location.hash !== _hash) 
						{
								global.location.hash = _hash;
						}
				};
				global.onload = function () 
				{        
					noBackPlease();
				// disables backspace on page except on input fields and textarea..
					document.body.onkeydown = function (e) 
					{
							var elm = e.target.nodeName.toLowerCase();
							if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) 
							{
								e.preventDefault();
							}
							// stopping event bubbling up the DOM tree..
							e.stopPropagation();
					};		
				};
			})(window);
		</script>
    <div class="main main-raised" style="border-style:solid;background-color: #F7C8E0;">    
			<div class="section">
			<!-- container -->
				<div class="container">
				<!-- row -->
					<div class="row" >
					<!-- ASIDE -->
						<div id="aside" class="col-md-3" style="border-style:solid;background-color: white;">
							<div id="get_category"></div>
							<div id="get_brand"></div>
							<div class="aside">
								<h3 class="aside-title">Top selling</h3>
								<div id="get_product_home"></div>
							</div>
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix"></div>
						<div class="row" id="product-row">
						<div class="col-md-12 col-xs-12" id="product_msg"></div>
							<div id="get_product"></div>
						</div>
						<div class="store-filter clearfix">
							<ul class="store-pagination" id="pageno">
								<li ><a class="active" href="#aside">1</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php
include "newslettter.php";
include "footer.php";
?>