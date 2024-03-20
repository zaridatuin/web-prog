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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


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
												<li class="active"><a href="#home">Home</a></li>
												<li class="contact"><a href="#about">About</a></li>
												<li><a href="menu.php">Menu</a></li>
												<li><a href="#contact">Contact</a></li>
											</ul>
										</nav>


									</div>
								</div>
				            </div>
				          
						</div>
				

						<div class="contact-info">
							<a href="#profile" data-toggle="modal" aria-pressed="false"> 
							<?php
    session_start();
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
       
        if(strlen($email) > 8) {
            echo substr($email, 0, 8) . ".."; 
        } else {
            echo $email;
        }
		
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
				<!--header_default-->
					
			</div>
		</header>
		<!-- HEADER -->










		<section class="banner">
			<div class="container">
				
				<div class="bannercontent">
					

					<div class="text full">
						<h3>SMOKED MEAT, TACOS and SANDWICHES</h3>
						<h2>
							HIGHLAND <br>SMOKEHOUSE
						</h2>
						<p>
							Baguio City
						</p>
					</div>
					

				</div>
				<!--bannercontent-->

			</div>
		</section>
		<!-- BANNER -->

		<section class="contentblock about" id="about">
			<div class="container">
				

				<div class="contentinline">

					<div class="text">
						<h3>About</h3>
						<h4>Best Smoked Meat in Baguio City! </h4>
						<p>
						Welcome to Highland Smokehouse, your culinary haven nestled in the heart of Baguio City. We take pride in offering a unique gastronomic experience, where the cool mountain air meets the rich aroma of our specialty dishes – Smoked Meats, Tacos, and Sandwiches.
						<br> <br>
						At Highland Smokehouse, we are more than just a restaurant; we are a celebration of flavors, a tribute to culinary craftsmanship, and a gathering place for those who appreciate exceptional food. Our commitment to excellence is reflected in every dish we serve.		
					</div>


					<div class="imagearea">
						<img src="img/HS.jpg" style="width: 500px; height: 650px;">
					</div>


				</div>


			</div>
		</section>
		<!-- ABOUT -->

	
	

	<section class="blog_w3ls py-lg-5" id="menu">
        <div class="container py-sm-5 py-4">
            <div class="title-section pb-4">
                <h3 class="main-title-w3_pvt"> Specialties </h3>
                <span class="title-line">
                </span>
            </div>
            <div class="row space-sec">
               
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4" data-aos="zoom-out">
                    <div class="card border-1">
                        <div class="card-header p-0 position-relative">
                            <a href="menu.php" data-toggle="modal" aria-pressed="false" data-target="menu.php"
                                role="button">
                                <img class="card-img-bottom" src="img/SmokedMeat.jpg" alt="Smoked Meat"
								style="width: 348px; height: 400px;">
                                <span class=" bg-theme1 " aria-hidden="true"></span>

                            </a>
                        </div>
                        <div class="card-body border-0">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="menu.php" data-toggle="modal" aria-pressed="false" data-target="menu.php"
                                    role="button">SMOKED MEAT</a>
                            </h5>
                            <p>Indulge in the smoky allure of our signature smoked meats – from tender chicken and mouthwatering ribs to perfectly crafted brisket. Each bite is a journey into the heart of authentic barbecue, where rich flavors and expert smoking techniques collide.</p>
                            
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4"  data-aos="zoom-out">
                    <div class="card border-1">
                        <div class="card-header p-0 position-relative">
                            <a href="menu.php" data-toggle="modal" aria-pressed="false" data-target="menu.php"
                                role="button">
                                <img class="card-img-bottom" src="img/Sandwiches.jpg" alt="Sandwiches"
								style="width: 348px; height: 400px;">
                                <span class="bg-theme1 " aria-hidden="true"></span>

                            </a>
                        </div>
                        <div class="card-body border-0">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="menu.php" data-toggle="modal" aria-pressed="false" data-target="menu.php"
                                    role="button">SANDWICHES</a>
                            </h5>
                            <p>Elevate your sandwich experience with our pulled pork and chicken creations. Slow-cooked to perfection, these sandwiches deliver a harmonious blend of smokiness and tenderness. Join us for a quick bite that transcends the ordinary – where every mouthful reflects our commitment to exceptional flavors.	</p>
                            
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 mx-auto"  data-aos="zoom-out">
                    <div class="card border-1">
                        <div class="card-header p-0  position-relative">
                            <a href="menu.php" data-toggle="modal" aria-pressed="false" data-target="menu.php"
                                role="button">
                                <img class="card-img-bottom" src="img/Tacos.jpg" alt="Tacos"
								style="width: 348px; height: 400px;">
                                <span class=" bg-theme1 " aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="menu.php" data-toggle="modal" aria-pressed="false" data-target="menu.php"
                                    role="button">TACOS</a>
                            </h5>
                            <p>Experience a burst of flavors with our diverse taco menu. Dive into the freshness of fish, the boldness of pork, the richness of beef, and the authenticity of birria. Our tacos are a fusion of culinary excellence, offering a symphony of tastes and textures inspired by Mexican tradition.</p>
                            
                        </div>
                    </div>
                </div>
              
            </div>
			<div class="row mt-4 text-center">
            <div class="col-md-12">
                <a href="menu.php" class="btn btn-dark	">Go to Full Menu</a>
            </div>
        </div>
        </div>
    </section>


	
	
		

		<section class="contact-wthree" id="contact">
			<div class="container py-sm-5">
				<div class="title-section py-4">
					<h3 class="main-title-w3_pvt">Contact us</h3>
					<span class="title-line">
					</span>
				</div>
				<div class="row py-lg-5 py-4">
					<div class="col-lg-5" data-aos="zoom-in">
						<div class="w3_pvt-contact-top">
							<h4>get in touch </h4>
							<p>Calle Uno Food Hub #3 Escoda Street, Baguio City, Philippines</p>
						</div>
						<hr>
						<p></p>
						
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d593.6429875827503!2d120.58563311044705!3d16.413550511125266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a16fe3e655ff%3A0x41eefd411a711fe7!2s3%20Escoda%2C%20Baguio%2C%202600%20Benguet!5e1!3m2!1sen!2sph!4v1708101471421!5m2!1sen!2sph"
								allowfullscreen></iframe>
						</div>
						
					</div>
					<div class="offset-1"></div>
					<div class="col-lg-6 mt-lg-0 mt-5" data-aos="zoom-in">
						
						<div class="register-top1">
							<form action="#" method="get" class="register-wthree">
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label>
												First name
											</label>
											<input class="form-control" type="text" placeholder="Juan" name="email"
												required="">
										</div>
										<div class="col-md-6 mt-md-0 mt-4">
											<label>
												Last name
											</label>
											<input class="form-control" type="text" placeholder="Dela Cruz" name="name" required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
											<label>
												Mobile
											</label>
											<input class="form-control" type="text" placeholder="xxxx xxxxx" name="email"
												required="">
										</div>
										<div class="col-md-6 mt-md-0 mt-4">
											<label>
												Email
											</label>
											<input class="form-control" type="email" placeholder="example@email.com" name="email"
												required="">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-12">
											<label>
												Your message
											</label>
											<textarea placeholder=" type your message here" class="form-control"></textarea>
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-md-12">
										<button type="submit" class="btn btn-w3_pvt btn-block w-100 font-weight-bold text-uppercase">Send</button>
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</section>






		<!-- MENU -->




		<div class="footerv4-w3ls" id="footer">
			<div class="footerv4-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-6 footv4-left">
	
							<h2>
								<a href="index.php">HIGHLAND SMOKEHOUSE</a>
							</h2>
							<p class="text-white"> Highland Smokehouse boasts the best Texas Style BBQ in Town!</p>
	
	
						</div>
						<div class="col-lg-2 col-sm-6 footv4-content mt-sm-0 mt-4">
							<h3>Navigation</h3>
							<ul class="v4-content">
								<li>
									<a href="index.php">Home</a>
								</li>
								
								<li>
									<a href="menu.php" class="scroll">Menu</a>
								</li>
								
								<li>
									<a href="#contact" class="scroll">Contact</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-6 footv4-left fv4-g3 my-lg-0 mt-4">
							<div class="footerv4-social">
								<h3>stay connected</h3>
								<ul>
									<li>
                                   <a href=" ">
                                        <i class="bi bi-facebook facebook-icon" style=" font-size: 2rem; color: #3b5998; margin: 0.5rem;"></i>
                                     </a>
									</li>
									<li>
                                    <a href=" ">
                                        <i class="bi bi-instagram instagram-icon"style=" font-size: 2rem; color: #c32aa3;"></i>
                                    </a>
									</li>
									
									</li>
								</ul>
							</div>
						
						</div>
						<div class="col-lg-3 col-sm-6 footv4-left my-lg-0 my-4">
							<h3>contact</h3>
							<ul class="d-flex header-agile pt-0 flex-column">
								<li>
									<span class="fa fa-envelope-open"></span> <br>
									<a href="mailto:example@email.com" class="text-white">highlandsmokess@gmail.com</a>
								</li>
								<li class="mt-3">
									<span class="fa fa-phone"></span> <br>
									<p class="d-inline text-white">+0927 031 6695</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>




 <!-- login  -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
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

</html>
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
                   
                    <div class="form-group">
                        <label for="address" class="col-form-label">Address</label>
                        <input type="text" class="form-control" placeholder="" name="address" id="address"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-form-label">Contact Number</label>
                        <input type="text" class="form-control" placeholder="" name="number" id="number"
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
           
            event.preventDefault(); 
            
        
            var formData = new FormData(this); 

         
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
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartLabel">Your Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              
                <div id="cart-items">
                  
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</div>
<!-- PROFILE PAGE -->


<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="profileLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="color:black">
      <div class="modal-header">
        <h5 class="modal-title" id="profileLabel">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="profileContent">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>



function fetchUserProfile() {
    $.ajax({
        url: 'profile.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            
            $('#profileContent').html(
                '<p><b>Username:</b> ' + response.username + '</p>' +
                '<p><b>Email:</b> ' + response.email + '</p>' +
                '<p><b>Address:</b> ' + response.address + '</p>' +
                '<p><b>Contact Number:</b> ' + response.number + '</p>' +
                '<p><b>Join Date:</b> ' + response.join_date + '</p>'
            );
        },
        error: function(xhr, status, error) {
        
            $('#profileContent').html('<p>Error fetching profile: ' + xhr.responseText + '</p>');
        }
    });
}


$('#profile').on('shown.bs.modal', function() {
    fetchUserProfile();
});
</script>


		<script src="js/bliss.js"></script>
		<script src="js/bootstrap.js"></script>
		<script>
			var dateobj = new Date(); var getyear = dateobj.getFullYear(); var getyeardiv = document.getElementById('copyrightyear'); getyeardiv.innerHTML = getyear;
		</script>
	</body>
</html>