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
				        
						</div>
						

						<div class="contact-info">
							<a href="#cart" data-toggle="modal" aria-pressed="false"> 
							<?php
    session_start();
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
      
        if(strlen($email) > 8) {
            echo substr($email, 0, 8) . ".."; 
        } else {
            echo $email;
        }
		echo '<i class="fas fa-shopping-cart"></i></a>';
    } else {
        echo '<a href="#exampleModal" data-toggle="modal" aria-pressed="false">LOGIN';
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
			
					
			</div>
		</header>
		<!-- HEADER -->


	



<?php include('fullmenu.php'); ?>


<section class="banner">

    <div class="container">
	<div class="category-buttons">
                <?php
               
                foreach ($distinctCategories as $category) {
                    echo '<button class="btn btn-dark mx-3 mb-5" onclick="filterProducts(\'' . urlencode($category) . '\')">' . $category . '</button>';
                }
                ?>
                <button class="btn btn-dark  mb-5" onclick="resetFilter()">All Products</button>
				
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
									<button type="button" class="btn btn-dark add-to-cart-btn">+</button> 
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
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
                    <form id="loginForm" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="" name="name" id="recipient-name"
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
<script>
        document.getElementById("loginForm").addEventListener("submit", function (event) {
            event.preventDefault(); 

            var formData = new FormData(this); 

            
            fetch('login.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (data === 'success') {
                    alert('Login successful!');
                    window.location.href = 'index.php'; 
                } else {
                    alert('Error: Incorrect username or password.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again later.');
            });
        });
    </script>
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
                    <form id="registerForm" action="register2.php" method="post" class="p-3">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder="" name="name" id="recipient-rname"
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
                            <label for="password2" class="col-form-label">Confirm Password</label>
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
<script>
        document.getElementById("registerForm").addEventListener("submit", function (event) {
            // Prevent default form submission
            event.preventDefault(); 
            
            // Get form data
            var formData = new FormData(this); 

            // Perform password validation
            var password = formData.get('Password');
            if (!validatePassword(password)) {
                alert("Password must be at least 8 characters long and contain at least 1 number.");
                return; 
            }

          
            fetch('register2.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                
                alert(data);
               
                if (data === 'Registration successful!') {
                    $('#exampleModal1').modal('hide'); 
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again later.');
            });
        });

        function validatePassword(password) {
            // Password must be at least 8 characters long and contain at least 1 number
            var regex = /^(?=.*\d).{8,}$/;
            return regex.test(password);
        }
    </script>
<!-- // register -->
<!-- CART -->

<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style = "color: black">
            <div class="modal-header">
                <h5 class="modal-title" id="cartLabel">Your Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Cart items will be dynamically loaded here -->
                <div id="cart-items">
                    <!-- Cart items will be inserted here -->
                </div>
                <p id="cart-total">Total: ₱0.00</p> <!-- Display the cart total here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark btn-proceed-to-checkout">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</div>

<script>
	 $(document).ready(function() {
		$('.btn-proceed-to-checkout').click(function() {
      
        $('#cart-items').empty(); 
        $('#cart-total').text('Total: ₱0.00'); 
        $('#cart').modal('hide');
    });
    });

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
	$(document).ready(function() {
    
    $('.add-to-cart-btn').click(function() {
  
    var productCard = $(this).closest('.card');
    var productName = productCard.find('.card-title').text();
    var productPriceStr = productCard.find('.wthree-bnr-btn').text();

 
    var productPrice = parseFloat(productPriceStr.replace(/[^\d.]/g, ''));

   
    var existingCartItem = $('#cart-items').find('.cart-product-name').filter(function() {
        return $(this).text() === productName;
    });

    if (existingCartItem.length > 0) {
      
        var existingQuantity = parseInt(existingCartItem.siblings('.cart-product-quantity').text().replace('x', ''));
        var newQuantity = existingQuantity + 1;
        existingCartItem.siblings('.cart-product-quantity').text('x' + newQuantity);

        var existingTotalPriceStr = existingCartItem.siblings('.cart-product-total-price').text();
        var existingTotalPrice = parseFloat(existingTotalPriceStr.replace(/[^\d.]/g, ''));
        var newTotalPrice = existingTotalPrice + productPrice;
        existingCartItem.siblings('.cart-product-total-price').text(' ₱' + newTotalPrice.toFixed(2));
    } else {
        
        var cartItemHtml = '<div class="cart-item">' +
                               '<p class="cart-product-details">' +
                                   '<span class="cart-product-name">' + productName + '</span>' +
                                   '<span class="cart-product-quantity">x1</span>' +
                                   '<span class="cart-product-total-price">' + productPriceStr + '</span>' +
                               '</p>' +
                           '</div>';
        $('#cart-items').append(cartItemHtml);
    }
    
    
    updateCartTotal();
});

  
    function updateCartTotal() {
        var total = 0;
        $('.cart-product-total-price').each(function() {
            var priceStr = $(this).text();
            var price = parseFloat(priceStr.replace(/[^\d.]/g, ''));
            total += price;
        });
        $('#cart-total').text('Total: ₱' + total.toFixed(2));
    }
});
</script>
		<script src="js/bliss.js"></script>
		<script src="js/bootstrap.js"></script>
		<script>
			var dateobj = new Date(); var getyear = dateobj.getFullYear(); var getyeardiv = document.getElementById('copyrightyear'); getyeardiv.innerHTML = getyear;
		</script>
	</body>
</html>