<?php
session_start();
if (isset($_SESSION['sessionEmail'])) {
} else {
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>E Books</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="websitecss/normalize.css">
	<link rel="stylesheet" type="text/css" href="websiteicomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="websitecss/vendor.css">
	<link rel="stylesheet" type="text/css" href="website.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">

		<div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-11">
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div><!--social-links-->
					</div>
					<div class="col-md-1">
						<div class="product-item row align-items-end">

								<?php
								$count = 0;
								if (isset($_SESSION['cart'])) {
									$count = count($_SESSION['cart']);
								}
								?>
								<figure class="product-style">
									<a href="./mycart.php" class="cart for-buy"><i class="icon icon-clipboard"></i><span>My Cart (<?php echo $count; ?>)</span></a>
								</figure>
						</div>
					</div>

					<?php
					if (isset($_SESSION['sessionEmail'])) {
						include "indexheader.php";
					} else {
					}
					?>



				</div>
			</div>
		</div><!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row mx-0 px-0">

					<div class="col-md-2">
						<div class="main-logo">
							<a href="./index.php"><img src="./websiteimages/mainlogo.png" alt="logo"></a>
						</div>

					</div>

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">


								<ul class="menu-list">
									<li class="menu-item active"><a href="#home">Home</a></li>
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><a href="about.html">About <span class="badge bg-dark">PRO</span></a></li>
										<li><a href="styles.html">Styles <span class="badge bg-dark">PRO</span></a></li>
										<li><a href="blog.html">Blog <span class="badge bg-dark">PRO</span></a></li>
										<li><a href="single-post.html">Post Single <span class="badge bg-dark">PRO</span></a></li>
										<li><a href="shop.html">Our Store <span class="badge bg-dark">PRO</span></a></li>
										<li><a href="single-product.html">Product Single <span class="badge bg-dark">PRO</span></a></li>
										<li><a href="contact.html">Contact <span class="badge bg-dark">PRO</span></a></li>
										<li><a href="thank-you.html">Thank You <span class="badge bg-dark">PRO</span></a></li>
									</ul>

									</li>
									<li class="menu-item"><a href="#featured-books" class="nav-link">Novels</a></li>
									<li class="menu-item"><a href="#popular-books" class="nav-link">Comics</a></li>
									<li class="menu-item"><a href="#special-offer" class="nav-link">Stories</a></li>
									<li class="menu-item"><a href="#latest-blog" class="nav-link">General Knowledge</a></li>
									<?php
									if (isset($_SESSION['sessionEmail'])) {
											
									} else {
										echo "<li><a style='width: 75px; background-color: red;font-size:10px;font-weight:bold;color:white;' href='./login.php' class='btn btn-danger'>Login</a></li>";
									}
									?>


								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>

	</div><!--header-wrap-->

	<section id="billboard">

		<div class="container">
			<div class="row">
				<div class="col-md-12">



					<div class="main-slider pattern-overlay">
						<div class="slider-item">
							<div class="banner-content">
								<h2 class="banner-title">The Adventures Of Tom Sawyer</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
									ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
									urna, a eu.</p>

							</div><!--banner-content-->
							<img src="websiteimages/adventures-of-tom-sawyer-english-learning-book-stories.png" alt="banner" class="banner-image">
						</div><!--slider-->



					</div>
				</div>
			</div>

	</section>

	<section id="client-holder" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="inner-content">
					<div class="logo-wrap">
						<div class="grid">
							<a href="#"><img src="websiteimages/client-image1.png" alt="client"></a>
							<a href="#"><img src="websiteimages/client-image2.png" alt="client"></a>
							<a href="#"><img src="websiteimages/client-image3.png" alt="client"></a>
							<a href="#"><img src="websiteimages/client-image4.png" alt="client"></a>
							<a href="#"><img src="websiteimages/client-image5.png" alt="client"></a>
						</div>
					</div><!--image-holder-->
				</div>
			</div>
		</div>
	</section>

	<section id="" class="py-5 my-5">
		<!-- Novels work here -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<h2 class="section-title">Novels</h2>
					</div>
					<div class="product-list">
						<div class="row">

							<?php
							include("connection.php");
							$selectQuery = "SELECT * FROM books WHERE BookCategory = 'Novel'";
							$getData = mysqli_query($conn, $selectQuery);
							while ($row = mysqli_fetch_array($getData)) {
							?>
								<div class="col-md-3">
									<div class="product-item">
									<form action="./manage_cart.php" method="POST">
										<figure class="product-style">
											<img src="<?php echo $row['BookImg'] ?>" alt="Books" class="product-item">
											<button type="submit" name="Add_To_Cart" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
											<input type="hidden" name="Item_Name" value="Novel">
											<input type="hidden" name="Price" value="450">
										</figure>
									</form>
										<figcaption>
											<h3>
												<?php echo $row['BookName'] ?>
											</h3>
											<span>
												<?php echo $row['AuthorName'] ?>
											</span>
											<div class="item-price">
												PKR : RS<?php echo $row['BookPrice'] ?>
											</div>
										</figcaption>
									</div>
								</div>
							<?php
							}
							?>

						</div><!--ft-books-slider-->
					</div><!--grid-->


				</div><!--inner-content-->
			</div>
		</div>
		<!-- Novels work here -->

		<!-- comics work here -->

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<h2 class="section-title">Comics</h2>
					</div>
					<div class="product-list">
						<div class="row">

							<?php
							include("connection.php");
							$selectQuery = "SELECT * FROM books WHERE BookCategory = 'Comic'";
							$getData = mysqli_query($conn, $selectQuery);
							while ($row = mysqli_fetch_array($getData)) {
							?>
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?php echo $row['BookImg'] ?>" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>
												<?php echo $row['BookName'] ?>
											</h3>
											<span>
												<?php echo $row['AuthorName'] ?>
											</span>
											<div class="item-price">
												<?php echo $row['BookPrice'] ?>
											</div>
										</figcaption>
									</div>
								</div>
							<?php
							}
							?>

						</div><!--ft-books-slider-->
					</div><!--grid-->


				</div><!--inner-content-->
			</div>
		</div>
		<!-- comics work here -->

		<!-- Stories work here -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<h2 class="section-title">Stories</h2>
					</div>
					<div class="product-list">
						<div class="row">

							<?php
							include("connection.php");
							$selectQuery = "SELECT * FROM books WHERE BookCategory = 'Story'";
							$getData = mysqli_query($conn, $selectQuery);
							while ($row = mysqli_fetch_array($getData)) {
							?>
								<div class="col-md-3">
									<div class="product-item">
										<figure class="product-style">
											<img src="<?php echo $row['BookImg'] ?>" alt="Books" class="product-item">
											<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
												Cart</button>
										</figure>
										<figcaption>
											<h3>
												<?php echo $row['BookName'] ?>
											</h3>
											<span>
												<?php echo $row['AuthorName'] ?>
											</span>
											<div class="item-price">
												<?php echo $row['BookPrice'] ?>
											</div>
										</figcaption>
									</div>
								</div>
							<?php
							}
							?>

						</div><!--ft-books-slider-->
					</div><!--grid-->


				</div><!--inner-content-->
			</div>
		</div>
		<!-- Stories work here -->

	</section>

	<section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="row">

						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="websiteimages/single-image.jpg" alt="book" class="single-image">
							</figure>
						</div>

						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Best Selling Book</h2>

								<div class="products-content">
									<div class="author-name">By Timbur Hood</div>
									<h3 class="item-title">Birds gonna be happy</h3>
									<p>Some believe the lyrics are partly inspired by birds that Marley was fond of that used to fly and sit next to his home..</p>
									<div class="item-price">$ 45.00</div>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">shop it now <i class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>



	<!-- Stories work here -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="section-header align-center">
					<h2 class="section-title">General Knowledge</h2>
				</div>
				<div class="product-list">
					<div class="row">

						<?php
						include("connection.php");
						$selectQuery = "SELECT * FROM books WHERE BookCategory = 'General knowledge'";
						$getData = mysqli_query($conn, $selectQuery);
						while ($row = mysqli_fetch_array($getData)) {
						?>
							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="<?php echo $row['BookImg'] ?>" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>
											<?php echo $row['BookName'] ?>
										</h3>
										<span>
											<?php echo $row['AuthorName'] ?>
										</span>
										<div class="item-price">
											<?php echo $row['BookPrice'] ?>
										</div>
									</figcaption>
								</div>
							</div>
						<?php
						}
						?>

					</div><!--ft-books-slider-->
				</div><!--grid-->


			</div><!--inner-content-->
		</div>
	</div>
	<!-- Stories work here -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4">

					<div class="footer-item">
						<div class="company-brand">
							<img src="./websiteimages/mainlogo.png" alt="logo" class="footer-logo">
							<p>An ebook (short for electronic book), also spelled as e-book or eBook, is a book publication made available in electronic form, consisting of text, images, or both, readable on the flat-panel display of computers or other electronic devices..</p>
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<div class="footer-menu">
						<h5>About Us</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">vision</a>
							</li>
							<li class="menu-item">
								<a href="#">articles </a>
							</li>
							<li class="menu-item">
								<a href="#">careers</a>
							</li>
							<li class="menu-item">
								<a href="#">service terms</a>
							</li>
							<li class="menu-item">
								<a href="#">donate</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Discover</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Home</a>
							</li>
							<li class="menu-item">
								<a href="#">Books</a>
							</li>
							<li class="menu-item">
								<a href="#">Authors</a>
							</li>
							<li class="menu-item">
								<a href="#">Subjects</a>
							</li>
							<li class="menu-item">
								<a href="#">Advanced Search</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>My account</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Sign In</a>
							</li>
							<li class="menu-item">
								<a href="#">View Cart</a>
							</li>
							<li class="menu-item">
								<a href="#">My Wishtlist</a>
							</li>
							<li class="menu-item">
								<a href="#">Track My Order</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Help center</a>
							</li>
							<li class="menu-item">
								<a href="#">Report a problem</a>
							</li>
							<li class="menu-item">
								<a href="#">Suggesting edits</a>
							</li>
							<li class="menu-item">
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

				</div>

			</div>
			<!-- / row -->

		</div>
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							<div class="col-md-6">
								<p>© 2022 All rights reserved. Free HTML Template by <a href="https://www.templatesjungle.com/" target="_blank">TemplatesJungle</a></p>
							</div>

							<div class="col-md-6">
								<div class="social-links align-right">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-youtube-play"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<script src="websitejs/plugins.js"></script>
	<script src="websitejs/script.js"></script>
	<script src="js/main.js"></script>

</body>

</html>