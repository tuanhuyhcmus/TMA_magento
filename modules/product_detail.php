<!DOCTYPE html>
<html >
	<head>
	<meta charset="UTF-8">
	<title>Product Detail</title>
	       <link href="web/css/font/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="web/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
        <link href="web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
        <link href="web/css/styles-m.css" rel="stylesheet" type="text/css" />
        <link href="web/css/styles.css" rel="stylesheet" type="text/css" />
        <link href="web/css/styles-l.css" rel="stylesheet" type="text/css" />
        <link href="web/css/magicmenu.css" rel="stylesheet" type="text/css" />
        <link href="web/css/responsive.css" rel="stylesheet" type="text/css" />    
        <link href="web/css/home.css" rel="stylesheet" type="text/css" />
        <script src="web/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="web/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		 <link href="web/css/custom.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			 .breadcrumb > li + li:before {
				content: "\3E" 
			}
			 .breadcrumb{				
				font-size: 15px !important;
			}
			#title_samsung{
				font-size: 30px ;
			}
			#title_review{
				font-size: 14px;
				
			}
			#id_money{
				font-size: 25px;
			}
			#id_money_blue{
				font-size: 20px;
				color: blue;
			}			
			#id_old_money{
				font-size: 15px;
				text-decoration: line-through;
			}
			#id_save{
				font-size: 20px;
			}
			#id_review{
				font-size: 16px;
				 font-weight: bold;
			}			
			#green_text{
				color: green;
				font-size: 15px;
			}
			#blue_text{
				color: blue;
				font-size: 15px;
			}			
			.button1 {font-size: 5px;
				background-color: #4CAF50;
				}
			.button2 {font-size: 5px;
			background-color: #ff0000;}
			.table-bordered th, .table-bordered td { border: 1px solid #ddd!important }
		</style>
		
</head>
 <body data-container="body" class="cms-home cms-index-index page-layout-1column" aria-busy="false">
        <div class="page-wrapper">
            <?php
                include('modules/header.php');
               // include('modules/home.php');
             ?>
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<ol class="breadcrumb">
					<li>
						<a href="#" title="Home"> Home </a>					
					</li>
					<li>
						<a href="#" title="Category"> Category</a>	
					</li>
					<li>
						<a href="#" title="Electric & Computer"> Electric & Computer</a>	
					</li>
					<li>
						<a href="#" title="Cell Phones& Accessories"> Cell Phones & Accessories</a>	
					</li>
					<li>
						<a href="#" title="Unlocked Phones"> Unlocked Phones </a>	
					</li>
					<li>
						<a href="#">Samsung Galaxy S7 Edge</a>	
					</li>									
				</ol>	
			</div>	
			<div class="row">
				<div class="col-md-3">
					<div class="row">
						<img src="web/images/samsung_big.png"
						>
					</div>
					<div class="row">
						<a href="#">
						<div class="col-md-3 ax_default image">
							<img src="web/images/samsung_small_1.png"
							>
						</div>
						</a>
						<a href="#">
						<div class="col-md-3">
							<img src="web/images/samsung_small_2.png"
							>
						</div>
						</a>
						<a href="#">
						<div class="col-md-3">
							<img src="web/images/samsung_small_3.png"
							>
						</div>
						</a>
						<a href="#">
						<div class="col-md-3">
							<img src="web/images/samsung_small_4.png">
						</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-9">
							<p id="title_samsung">Samsung Galaxy S7 Edge Factory Unlocked Phone 32GB International Version (Black Onyx)</p>
						</div>
					</div>
					<div class="row">
						 <div class="col-md-3">
						<span> <img src="web/images/star.ico"> </span>
						<span> <img src="web/images/star.ico"> </span>
						<span> <img src="web/images/star.ico"> </span>
						<span> <img src="web/images/star.ico"> </span>
						<span> <img src="web/images/star.ico"> </span>
						</div>
						<div >
						
						<a href="#" id="title_review">  2 Reviews</a>
						<span>|</span>
						<a href="#" id="title_review">Write Your Review</a>
						</div>
					</div>
					<div class="row">
						<br>
						
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="col-md-5">
							<p>	Price:  <span id="id_money">$524.99</span> <span id="id_old_money"> $556.99 </span>&nbsp;&nbsp;&nbsp;	  You save:<span id="id_save">$22.00</span>
							&nbsp;&nbsp;&nbsp;
							</p>
							</div>
							<div class="col-md-2">
								<img src="web/images/huy.png">
							</div>
						
						</div>
					</div>
					
					<div class="row">
						<p id="green_text">In stock</p>
					</div>
					<div class="row">
						<p>Order and choose FREE Shipping at checkout (delivery within: 10- 12 days)</p>
						<br>
					</div>	
					<div class="row">
						<div class="col-md-1">
						Color:
						</div>
						<div class="col-md-8">
							<div class="row">
								<input type="radio" name="abc">Black Onyx</input>
							</div>
							<div class="row">
								<input type="radio" name="abc">Titanium Silver</input>
							</div>						
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<span class="glyphicon glyphicon-ok"></span> 
							5.50inch QQHD sAMOLED Capactilve Touchscreen 2560x1440 pixel resolution (534 ppi pixel density) +Conring Gorilla
							Glass 4 ( Back Panel) w/Always-on Display, TouchWiz UI, Curved Edge Screen.							
							<br>
							<span class="glyphicon glyphicon-ok"></span> 
							Android OS v6.0 ( Marshamallow) Chipset: Exynos: 8890 Processor: Octa-Core
							<br>
							<span class="glyphicon glyphicon-ok"></span> 
							12Megapixel Camera with Dual Pixel Autofocus, OIS, F/1.7 26mm
							<br>
							<span class="glyphicon glyphicon-ok"></span> 
							Internal Memory: 32GB, 4GB RAM - microSD Up to 256HB
							<br>
							<br>
						</div>
						<div class="col-md-8">
						<a href="#">View More Details</a>
						<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-1">
								<p>Quantity</p>
							</div>
							<div class="col-md-3">
								<input class="span1" style="max-width:34px" placeholder="1"  size="25" type="text">
								<button class="btn button1" type="button"><span class="glyphicon glyphicon-plus"></span></button>
								<button class="btn button2" type="button"><span class="glyphicon glyphicon-minus"></span></button>
							</div>
							<div class="col-md-6">
								<button class="button btn-lg btn-info">Add to cart</button>
								<button class="button btn-lg btn-default">Buy it now</button>
								
							</div>
						</div>
						<div class="row">
							<br>
							<br>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-4">
								<a href="#" id="title_review">Compare with similar items</a>
							</div>
							<div class="col-md-2">
								<a href="#">Add to wishlist</a>
							</div>
							<div class="col-md-5">
								<div class="row">
									<div class="col-md-8">
										<div class="col-md-2">
											 <p id="title_review">Share</p>
										</div>
									
										<div class="col-md-1">
											 <a href="#">												
												<i class="fa fa-google" style="font-size:24px"></i>										
											</a>
										</div>
										<div class="col-md-1">
											 <a href="#">												
												<i class="fa fa-facebook" style="font-size:24px;color:blue"></i>										
											</a>
										</div>
										<div class="col-md-1">
											 <a href="#">												
												<i class="fa fa-twitter" style="font-size:24px;color:red"></i>										
											</a>
										</div>										
										<div class="col-md-1">
											 <a href="#">												
												<i class="fa fa-youtube" style="font-size:24px;color:red"></i>										
											</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<br>
					<br>
					<br>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-1 " style="background-color: 	#E6E6FA;" >
					<div class="row">
						<div class="col-md-offset-1">
							<br>
								<h2>Frequenty Bought Together</h2>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-5">
								<img src="web/images/samsung_crop_1.png">
							</div>
							<div class="col-md-2">
								<br>
								<br>								
								<span class="glyphicon glyphicon-plus"></span>
							</div>	
							<div class="col-md-5">
								<img src="web/images/samsung_crop_2.png">
							</div>							
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-10">
									<input type="checkbox" name="abc">Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster Case WITHOUT Screen Protector for
									Samsung Galaxy S7 Edge (2016 Release) <span id="blue_text" >$17.99</span>
									</input>
									<br>
	
									<input type="checkbox" name="abc">Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster  <span id="blue_text" >$7.85</span>
									</input>
									<br>
									<br>
									<br>
									<p>Total: <span id="id_money">$25.84</span> </p>
									<br>
								
									<div class="col-md-12">
										<button type="button" class=" btn btn-info" style="border: 2px solid #008CBA;">Add to cart</button>
										<button type="button" class=" btn btn-default" style="border: 2px solid #008CBA;">Add all to List</button>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
					<br>
				</div>
			</div>
			<div class="row">
			<br>
			<br>
				<div class="row">
					<div class="col-md-11 col-md-offset-1 ">
						<h2>Customers Also Bougth</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>						
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="col-md-offset-1">
						<br>
							<h2>Product Description</h2>
						<br>
					</div>		

					<div class="col-md-offset-1 col-md-8">
							<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
							face/smile detection, Auto HDR, panorama,1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording,
							touch focus, face/smile detection, Auto HDR, panorama</p>
							<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
							face/smile detection, Auto HDR, panorama,1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording,
							touch focus, face/smile detection, Auto HDR, panorama, 1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
							face/smile detection, Auto HDR, panorama,1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording,
							touch focus, face/smile detection, Auto HDR, panorama</p>
							
						<br>
					</div>						
				</div>
				<div class="row">
	
					<div class="row">						
						<div class="col-md-offset-1 col-md-8">
							
							<div class="col-md-8">
								<div class="row">
									<h4>Qualcome Snapdragon 820 Processor</h4>
									<br>
									<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
							face/smile detection, Auto HDR, panorama,1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording,
							touch focus, face/smile detection, Auto HDR, panorama</p>						
									<br>
								</div>	
								<div class="row">
									<h4>5.8 Quad HD Super AMOLED Display</h4>
									<br>
									<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
							face/smile detection, Auto HDR, panorama,1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording,
							touch focus, face/smile detection, Auto HDR, panorama</p>						
									<br>
								</div>	
								<div class="row">
									<h4>12 MP Rear Facing Camera</h4>
									<br>
									<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
							face/smile detection, Auto HDR, panorama,1/2.5" sensor size</p>						
									<br>
								</div>
								<div class="row">
									<h4>5MP Front Facing Camera</h4>
									<br>
									<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording</p>						
									<br>
								</div>				
								<div class="row">
									<h4>Samsung Smart Switch</h4>
									<br>
									<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording, touch focus,
							face/smile detection, Auto HDR, panorama,1/2.5" sensor size</p>						
									<br>
								</div>
								<div class="row">
									<h4>Samsung Pay</h4>
									<br>
									<p>1/2.5" sensor size, 1.4 µm pixel size, geo-tagging, simultaneous 4K video and 9MP image recording</p>						
									<br>
								</div>												
							</div>
							<div class="col-md-3">
								<div class="row">
									<img src="web/images/samsung_crop_customer_2.png">
								</div>
								<div class="row">
									<img src="web/images/samsung_crop_customer_3.png">
								</div>
								<div class="row">
									<img src="web/images/samsung_crop_customer_3.png">
								</div>								
							</div>							
						</div>
	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-offset-1 col-md-8">
						<div class="row">
							<br>
								<h2>Product Information</h2>
							<br>
						</div>
						<div class="col-md-12">						       
							<table class="table table-bordered">		
								<tbody>
									<tr>
										<td class="active">Product Dimernsions</td>
										<td>2.8 x 0.3 x5.9 inches</td>
									</tr>
									<tr>
										<td class="active">Item Weight</td>
										<td>5.6 ounces</td>
									</tr>
									<tr>
										<td class="active">Shipping Weight</td>
										<td>1 pounds(<a href="#">View shipping rates and policies</a> )</td>
									</tr>
									<tr>
										<td class="active">ASIN</td>
										<td>BO1CJU9ANC</td>
									</tr>		
									<tr>
										<td class="active">Item model number</td>
										<td>G5343 Black</td>
									</tr>		
									<tr>
										<td class="active">Batteries</td>
										<td>1 Lithium icon batteries requireds(include)</td>
									</tr>		
									<tr>
										<td class="active">Customer Reivew
										</td>
										<td>4.7 out of 5 (853 customers review) 
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>											
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
										</td>
									</tr>		
									<tr>
										<td class="active">Best Sellers Rank</td>
										<td>#18 in Cellphones & Accessories<br> #3 in <a href="#">Cellphones & Accessories > Cellphones</a></td>
									</tr>											
								</tbody>
							</table>						
						</div>
					</div>							
				</div>
				
				<div class="row">
					<div class="col-md-offset-1 col-md-8">
						<div class="row">
							<br>
								<h2>Compare to Similar Items</h2>
							<br>
						</div>
						<div class="col-md-12">						       
							<table class="table table-bordered">		
								<tbody>
									<tr>
										<td class="active"></td>
										<td>
											<div class="row">
												<div class="col-md-12 col-md-offset-2">
													<img src="web/images/samsung_crop_compare_1.png">
												</div>
												<div class="col-md-12">
													<h4>Compare with</h4>
												</div>
												<div class="col-md-12">
													<div class="col-md-9">
														<input type="text"></input>
													</div>
													<div class="col-md-3">
														<button type="button">															
															<span class="glyphicon glyphicon-search"></span>
														</button>
													</div>
												</div>
												<div class="col-md-12">
												  <div class="row">
													<div class="col-md-1">																												
														<span class="glyphicon glyphicon-exclamation-sign"></span>
													</div>
													<div class="col-md-10">
														<p>Please enter mode name or part of it</p>
													</div>
												  </div>
												</div>													
											</div>
										</td>
										<td>
											<div class="row">
												<div class="col-md-12 col-md-offset-2">
													<img src="web/images/samsung_crop_compare_1.png">
												</div>
												<div class="col-md-12">
													<h4>Compare with</h4>
												</div>
												<div class="col-md-12">
													<div class="col-md-9">
														<input type="text"></input>
													</div>
													<div class="col-md-3">
														<button type="button">															
															<span class="glyphicon glyphicon-search"></span>
														</button>
													</div>
												</div>
												<div class="col-md-12">
												  <div class="row">
													<div class="col-md-1">																												
														<span class="glyphicon glyphicon-exclamation-sign"></span>
													</div>
													<div class="col-md-10">
														<p>Please enter mode name or part of it</p>
													</div>
												  </div>
												</div>													
											</div>
										</td>
										
										
										<td>
											<div class="row">
												<div class="col-md-12 col-md-offset-2">
													<img src="web/images/samsung_crop_compare_1.png">
												</div>
												<div class="col-md-12">
													<h4>Compare with</h4>
												</div>
												<div class="col-md-12">
													<div class="col-md-9">
														<input type="text"></input>
													</div>
													<div class="col-md-3">
														<button type="button">															
															<span class="glyphicon glyphicon-search"></span>
														</button>
													</div>
												</div>
												<div class="col-md-12">
												  <div class="row">
													<div class="col-md-1">																												
														<span class="glyphicon glyphicon-exclamation-sign"></span>
													</div>
													<div class="col-md-10">
														<p>Please enter mode name or part of it</p>
													</div>
												  </div>
												</div>													
											</div>
										</td>
										
									</tr>
									<tr>
										<td class="active">Product name</td>
										<td>This items: <a href="#">Samsung Galaxy S7 Edge Factory Unlocked Phone 32GB International Version (Black Onyx)</a></td>
										<td><a href="#">Samsung Galaxy S7 Edge Factory Unlocked Phone 32GB International Version (Black Onyx)</a></td>
										<td><a href="#">Samsung Galaxy S7 Edge Factory Unlocked Phone 32GB International Version (Black Onyx)</a></td>										
									</tr>
									<tr>
										<td class="active">Customer Rating</td>
										<td>4.7 out of 5 (853 customers review) 
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>											
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
										</td>
										<td>4.7 out of 5 (853 customers review) 
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>											
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
										</td>
										<td>4.7 out of 5 (853 customers review) 
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>											
											<span class="glyphicon glyphicon-star"></span>
											<span class="glyphicon glyphicon-star"></span>
										</td>										
									</tr>
									<tr>
										<td class="active">Price</td>
										<td><h5>$233</h5></td>
										<td><h5>$233</h5></td>
										<td><h5>$233</h5></td>
									</tr>		
									<tr>
										<td class="active">Shipping</td>
										<td><p>FREE Shipping</p></td>
										<td><p>FREE Shipping</p></td>
										<td><p>FREE Shipping</p></td>										
									</tr>		
									<tr>
										<td class="active">Sold by</td>
										<td><a href="#">Mobiles International LLC</a></td>
										<td><h5>Eshop</h5></td>
										<td><h5>Eshop</h5></td>								
									</tr>		
									<tr>
										<td class="active">Camera Description</td>
										<td >13MP</td>
										<td>13MP</td>
										<td>Black</td>										
									</tr>		
									<tr>
										<td class="active">Screen Size</td>
										<td>5.5 Inch</td>
										<td >5.5 Inch</td>
										<td >5.5 Inch</td>										
									</tr>	
									<tr>
										<td class="active">Item Dimernsions</td>
										<td >5.5 Inch</td>
										<td >5.5 Inch</td>
										<td >5.5 Inch</td>										
									</tr>	
									<tr>
										<td class="active">Item Weight</td>
										<td>5.5 Inch</td>
										<td>5.5 Inch</td>
										<td>5.5 Inch</td>										
									</tr>	
									<tr>
										<td class="active">Operating System</td>
										<td >Android</td>
										<td >Android</td>
										<td>Android</td>										
									</tr>										
								</tbody>
							</table>						
						</div>
					</div>							
				</div>	

				<div class="row">
					<div class="col-md-offset-1 col-md-8">
						<div class="row">
							<br>
								<h2>Customers Reivew</h2>
							<br>
						</div>
						<div class="row">
						  <div class="col-md-12">
							<div class="col-md-2">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>											
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
							<div class="col-md-9">
								<p>5.0 out of 5 Star <span id="id_review">Best phone current in the Market - Include Inter Version Detail</span></p>
							</div>
						  </div>
						  <div class="col-md-12">
								<p>By <a href="#">Adam Thompson</a></p>
						  </div>
						  <div class="col-md-12">
								<p>I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago. </p>
						  </div>	
							<div class="col-md-12">
								<p>I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.								</p>
						  </div>							  
						</div>
						
						<div class="row">
						  <div class="col-md-12">
							<div class="col-md-2">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>											
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
							<div class="col-md-9">
								<p>5.0 out of 5 Star <span id="id_review">Best phone current in the Market - Include Inter Version Detail</span></p>
							</div>
						  </div>
						  <div class="col-md-12">
								<p>By <a href="#">Adam Thompson</a></p>
						  </div>
						  <div class="col-md-12">
								<p>I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago. </p>
						  </div>	
							<div class="col-md-12">
								<p>I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.
									I bougth the Samsung Galaxy S7 Edge G9342F in Black from this product page a week ago.								</p>
						  </div>							  
						</div>
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-info">Write a Review</button>
							</div>
						</div>
						
					</div>
				
				</div>
				
			</div>
			
        </div>
				<div class="row">
					<div class="col-md-11 col-md-offset-1 ">
						<br>
						<br>
						<h2>Recent Viewed Items</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>

						<div class="col-md-2">
							<div class="col-md-12">
								<a href="#">
									<img src="web/images/samsung_crop_customer_1.png">
								</a>
							</div>
							
							<div class="col-md-12">
								<p>
									Galaxy S7 Edge Case, SUPCASE Full-body Rugged Holster
								</p>
							</div>
							<div class="col-md-12">
								<p id="id_money_blue">$11.99</p>
							</div>
						</div>						
					</div>
				</div>		
		
		 <?php
		 include('modules/footer.php');
		 ?>
		</div>

   
</body>


</html>