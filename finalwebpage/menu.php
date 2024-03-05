<!DOCTYPE html>
<html>


	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<title>grahhh</title>

		<link rel="icon" type="image/png" href="images/favicon.png">
		<link href="bootstrap.css" type="text/css" rel="stylesheet" media="all">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

		
		<!-- FONT ICONS -->
		<link rel="stylesheet" href="fonts/icons-linear.css">
		<link rel="stylesheet" href="fonts/icons-fontawesome/css/all.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="style-responsive.css">


		<script src="js/jquery.js"></script>
		<script src="js/scripts.js"></script>
		<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
		<script src="js/menuscript.js"></script>
	</head>





	<body id="home">
		



		
		<header>
			<div class="container psr">

				<div class="header_default">


					<div class="site-branding">
						<a href="index.html" class="logo">
							<img src="img/log.png" alt="" class="logo-1">
							<img src="img/log.png" alt="" class="logo-2">
						</a>
					</div>


					<div class="header-right">


						<div class="site-navwrap">
							<div class="navicons">
		                		<a href="javascript:void;" class="navshow">
		                			<span class="lnr lnr-menu"></span>
		                		</a>
		                		<a href="javascript:void;" class="navhide">
		                			<span class="lnr lnr-cross"></span>
		                		</a>
		            		</div>
	      
		            		<div class="sitenav" id="sitenav">
		            			<div class="navwrap">
									<div class="navouter">


										<nav class="headermenu leftmenu" id="headnav" role="navigation">
											<ul>
												<li class="active"><a href="index.php">Home</a></li>
												<li class="contact"><a href="index.php#about">About</a></li>
												<li><a href="menu.php">Menu</a></li>
												<li><a href="index.php#contact">Contact</a></li>
											</ul>
										</nav>


									</div>
								</div>
				            </div>
				            <!--sitenav-->
						</div>
						<!--site-navwrap-->	

						<div class="contact-info">
							<a href="#exampleModal" data-toggle="modal" aria-pressed="false"> LOGIN</a>	
                            
                                <a class="social-icon" href="https://www.facebook.com/highlandsmokes" target="_blank"><span class="iconify" data-icon="la:facebook-f"></span></a>
                           
                           
                                <a class="social-icon" href="https://www.instagram.com/highlandsmokehouse/" target="_blank"><span class="iconify" data-icon="la:instagram"></span></a>
                           
						</div>
					</div>
						


				</div>
				<!--header_default-->
					
			</div>
		</header>
		<!-- HEADER -->







        <?php
    include('fullmenu.php');
    ?>


		<section class="banner">
			<div class="container">
				
				<div class="bannercontent">
					
                <div class="row">
                <div class="row">
                <div class="row">
    <?php foreach ($productNames as $productNameData) { ?>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4" data-aos="zoom-out">
            <div class="card border-1 mb-4">
                <div class="card-header p-0 position-relative">
                    <a href="#fullmenu" data-toggle="modal" aria-pressed="false" data-target="#fullmenu" role="button">
                        <!-- Use dynamic product name -->
                        <?php
                        $imageName = $productNameData['productname'] . '.jpg';
                        $imageSource = 'img/' . $imageName;
                        ?>
                        <img class="card-img-bottom" src="<?php echo $imageSource; ?>" alt="<?php echo $productNameData['productname']; ?>"
                             style="width: 368px; height: 400px;">
                        <!-- Adjust the width and height values as needed -->
                        <span class="bg-theme1" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="card-body border-1">
                    <h5 class="blog-title card-title font-weight-bold">
                        <a href="#fullmenu" data-toggle="modal" aria-pressed="false" data-target="#fullmenu" role="button">
                            <!-- Use dynamic product name -->
                            <?php echo $productNameData['productname']; ?>
                        </a>
                    </h5>
                    <?php foreach ($productsByProductName[$productNameData['productname']] as $productData) { ?>
                        <!-- Generate HTML for each product in the product name -->
                        <p><?php echo isset($productData['description']) ? $productData['description'] : 'Description'; ?></p>
                        <button type="button" class="btn blog-btn wthree-bnr-btn mt-3" data-toggle="modal"
                                aria-pressed="false" data-target="#exampleModal3">
                            <?php
                            $formattedPrice = isset($productData['price']) ? '₱' . number_format($productData['price'], 2) : 'Read more';
                            echo $formattedPrice;
                            ?>
                        </button>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
						
					

				</div>
				<!--bannercontent-->

			</div>
		</section>