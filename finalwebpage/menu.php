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
						<a href="index.php" class="logo">
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
							<a href="#cart" data-toggle="modal" aria-pressed="false"> 
							<?php
    session_start();
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        // Check if email length is greater than 8 characters
        if(strlen($email) > 8) {
            echo substr($email, 0, 8) . ".."; // Display first 8 characters followed by "..."
        } else {
            echo $email;
        }
		echo '<i class="fas fa-shopping-cart"></i>';
    } else {
        echo '<a href="#exampleModal" data-toggle="modal" aria-pressed="false"> LOGIN</a>';
    }
    ?>
	</a>
	<?php
    if(isset($_SESSION['email'])) {
        echo '<a href="logout.php" class="ml-2"><i class="fas fa-sign-out-alt"></i></a>';
    }
    ?>
	
                        
						</div>
					</div>
						



				</div>
				<!--header_default-->
					
			</div>
		</header>
		<!-- HEADER -->


	



<!-- Assuming you have already fetched product names and categories from the database -->
<?php include('fullmenu.php'); ?>


<section class="banner">

    <div class="container">
	<div class="category-buttons">
                <?php
                // Assuming you have an array $distinctCategories containing distinct product categories
                foreach ($distinctCategories as $category) {
                    echo '<button class="btn btn-secondary mx-3 mb-5" onclick="filterProducts(\'' . urlencode($category) . '\')">' . $category . '</button>';
                }
                ?>
                <button class="btn btn-secondary  mb-5" onclick="resetFilter()">All Products</button>
				
            </div>
      
	
            <div class="row" id="products-container">
                <?php foreach ($productNames as $productNameData) { ?>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4 category-<?php echo urlencode($productNameData['category']); ?>">
                        <div class="card border-1 mb-4">
                            <div class="card-header p-0 position-relative">
                                <?php
                                $imageName = $productNameData['productname'] . '.jpg';
                                $imageSource = 'img/' . $imageName;
                                ?>
                                <img class="card-img-bottom img-fluid" src="<?php echo $imageSource; ?>" alt="<?php echo $productNameData['productname']; ?>">
                                <span class="bg-theme1" aria-hidden="true"></span>
                            </div>
                            <div class="card-body border-1">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <?php echo $productNameData['productname']; ?>
                                </h5>
                                <?php foreach ($productsByProductName[$productNameData['productname']] as $productData) { ?>
                                    <p><?php echo isset($productData['description']) ? $productData['description'] : 'Description'; ?></p>
                                    <button type="button" class="btn blog-btn wthree-bnr-btn mt-3" data-toggle="modal" aria-pressed="false" data-target="#exampleModal3">
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
    </div>
</section>
			
					

				</div>
				<!--bannercontent-->

			</div>
		</section>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
	 <div class="modal-content bg-theme1">
		 <div class="modal-header">
			 <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
			 </button>
		 </div>
		 <div class="modal-body">
			 <form action="login.php" method="post" class="p-3">
				 <div class="form-group">
					 <label for="recipient-name" class="col-form-label">Username</label>
					 <input type="text" class="form-control" placeholder="" name=" name" id="recipient-name"
						 required="">
				 </div>
				 <div class="form-group">
					 <label for="password" class="col-form-label">Password</label>
					 <input type="password" class="form-control" placeholder="" name="Password" id="password"
						 required="">
				 </div>
				 <div class="right-w3l">
					 <input type="submit" class="form-control" value="Login">
				 </div>
				 <div class="row sub-w3l my-3">
					 <div class="col sub-w3_pvt">
						 <input type="checkbox" id="brand1" value="">
						 <label for="brand1" class="text-white">
							 <span></span>Remember me?</label>
					 </div>
					 <div class="col forgot-w3l text-right">
						 <a href="#" class="text-white">Forgot Password?</a>
					 </div>
				 </div>
				 <p class="text-center dont-do text-white">Don't have an account?
					 <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
						 Register Now</a>

				 </p>
			 </form>
		 </div>
	 </div>
 </div>
</div>
<!-- //login -->
<!-- register -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
 aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
	 <div class="modal-content bg-theme1">
		 <div class="modal-header">
			 <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
			 </button>
		 </div>
		 <div class="modal-body">
			 <form action="register2.php" method="post" class="p-3">
				 <div class="form-group">
					 <label for="recipient-name" class="col-form-label">Username</label>
					 <input type="text" class="form-control" placeholder="" name=" name" id="recipient-rname"
						 required="">
				 </div>
				 <div class="form-group">
					 <label for="recipient-email" class="col-form-label">Email</label>
					 <input type="email" class="form-control" placeholder="" name="Email" id="recipient-email"
						 required="">
				 </div>
				 <div class="form-group">
					 <label for="password1" class="col-form-label">Password</label>
					 <input type="password" class="form-control" placeholder="" name="Password" id="password1"
						 required="">
				 </div>
				 <div class="form-group">
					 <label for="password2" class="col-form-label">ConfirmPassword</label>
					 <input type="password" class="form-control" placeholder="" name="Confirm" id="password2"
						 required="">
				 </div>
				 <div class="sub-w3l">
					 <div class="sub-w3_pvt">
						 <input type="checkbox" id="brand2" value="">
						 <label for="brand2" class="mb-3 text-white">
							 <span></span>I Accept to the Terms & Conditions</label>
					 </div>
				 </div>
				 <div class="right-w3l">
					 <input type="submit" class="form-control" value="Register">
				 </div>
			 </form>
		 </div>
	 </div>
 </div>
</div>
<!-- // register -->


<script>
    function filterProducts(category) {
        var productsContainer = document.getElementById('products-container');

        // Show all products
        var products = productsContainer.getElementsByClassName('col-lg-4');
        for (var i = 0; i < products.length; i++) {
            products[i].style.display = 'block';
        }

        // Hide products not in the selected category
        var categoryProducts = document.getElementsByClassName('category-' + category);
        for (var i = 0; i < products.length; i++) {
            if (!products[i].classList.contains('category-' + category)) {
                products[i].style.display = 'none';
            }
        }
    }

    function resetFilter() {
        var productsContainer = document.getElementById('products-container');

        // Show all products
        var products = productsContainer.getElementsByClassName('col-lg-4');
        for (var i = 0; i < products.length; i++) {
            products[i].style.display = 'block';
        }
    }
</script>
		<script src="js/bliss.js"></script>
		<script src="js/bootstrap.js"></script>
		<script>
			var dateobj = new Date(); var getyear = dateobj.getFullYear(); var getyeardiv = document.getElementById('copyrightyear'); getyeardiv.innerHTML = getyear;
		</script>
	</body>
</html>