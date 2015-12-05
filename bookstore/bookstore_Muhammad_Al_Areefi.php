<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>GMA Printers</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/styleBookstore.css" type="text/css" media="all" />
	<script type="text/javascript" src="../js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="../js/functions.js"></script>
</head>
<body>
	<!-- Header -->
	<div id="header" class="shell">
		<div id="logo"><img src="../css/images/logo.png" height="50" width="auto"/></div>
		<!-- Navigation -->
		<div id='cssmenu'>
            <ul>
               <li><a href='../login/home.php'><span>Home</span></a></li>
               <li class='active has-sub'><a style="padding: 12px 20px;" href='#'><span>Services</span></a>
                  <ul>
                     <li class='has-sub'><a href='#'><span>Product 1</span></a></li>
                     <li class='has-sub'><a href='#'><span>Product 2</span></a></li>
                  </ul>
               </li>
               <li><a href='#'><span>Quotation</span></a></li>
               <li><a href='../login/login.php'><span>Profile</span></a></li>
               <li class='last'><a href='#'><span>About Us</span></a></li>
               <?php 
               if(isset($_SESSION['type'])){
               	if($_SESSION['type']=="staff"){
               		echo "<li class='last'><a href='dashboard.php'><span>Dashboard</span></a></li>";
               	}
               }
                 ?>
            </ul>
         </div>
		<!-- End Navigation -->
		<div class="cl">&nbsp;</div>
		<!-- Login-details -->
		<div id="login-details">
			<p>Welcome, <a href="#" id="user">Guest</a> .</p><p><a href="#" class="cart" ><img src="../css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
		</div>
		<!-- End Login-details -->
	</div>
	<!-- End Header -->
	<!-- Main -->
	<div id="main" class="shell">
		<!-- Sidebar -->
		<div id="sidebar">
			<ul class="categories">
				<!--li>
					<h4>Categories</h4>
					<ul>
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Morbi eget</a></li>
						<li><a href="#">Nulla egestas</a></li>
						<li><a href="#">Curabitur venenatis</a></li>
						<li><a href="#">Ut dictum purus</a></li>
						<li><a href="#">Curabitur imperdiet</a></li>
						<li><a href="#">Aliquam elementum</a></li>
					</ul>
				</li-->
				<li>
					<h4>Authors</h4>
					<ul>
						<li><a href="#">Muhammad Al-Areefi</a></li>
						<li><a href="#">Morbi eget</a></li>
						<li><a href="#">Nulla egestas</a></li>
						<li><a href="#">Curabitur venenatis</a></li>
						<li><a href="#">Ut dictum purus</a></li>
						<li><a href="#">Curabitur imperdiet</a></li>
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Morbi eget</a></li>
						<li><a href="#">Nulla egestas</a></li>
						<li><a href="#">Curabitur venenatis</a></li>
						<li><a href="#">Ut dictum purus</a></li>
						<li><a href="#">Curabitur imperdiet</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- End Sidebar -->
		<!-- Content -->
        <p></p>
		<div id="content">
			<!-- Products -->
			<div class="products">
				<h3>Author-Muhammad Al-Areefi</h3>
				<ul>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/mountain_peak.jpg" alt="" />
									<span class="book-name">On the Mountain Peak</span>
									<span class="author">by Muhammad Al-Areefi</span></a>
							<a href="#" class="buy-btn">BUY <span class="price"><span class="low">Rs.</span>1990.00</span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/repentant_people.jpg" alt="" />
									<span class="book-name">Memories of Repentant People</span>
					    <span class="author">by Muhammad Al-Areefi</span></a><a href="#" class="buy-btn">BUY <span class="price"><span class="low">Rs.</span>1990.00</span></a></div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/image03.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
								<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a><a href="#" class="buy-btn">BUY <span class="price"><span class="low">Rs.</span>1990.00</span></a></div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/image04.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a><a href="#" class="buy-btn">BUY <span class="price"><span class="low">Rs.</span>1990.00</span></a></div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/image05.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/image06.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/image07.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="../css/images/image08.jpg" alt="" />
									<span class="book-name">Book Name</span>
									<span class="author">by John Smith</span>
									<span class="description">Maecenas vehicula ante eu enim pharetra<br />scelerisque dignissim <br />sollicitudin nisi</span>
								</span>
							</a>
							<a href="#" class="buy-btn">BUY NOW <span class="price"><span class="low">$</span>22<span class="high">00</span></span></a>
						</div>
					</li>
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	<!-- Footer -->
	<div id="footer" class="shell">
		<div class="top">
			<div class="cnt">
				<div class="col about">
					<h4>About BestSellers</h4>
					<p>Nulla porttitor pretium mattis. Mauris lorem massa, ultricies non mattis bibendum, semper ut erat. Morbi vulputate placerat ligula. Fusce <br />convallis, nisl a pellentesque viverra, ipsum leo sodales sapien, vitae egestas dolor nisl eu tortor. Etiam ut elit vitae nisl tempor tincidunt. Nunc sed elementum est. Phasellus sodales viverra mauris nec dictum. Fusce a leo libero. Cras accumsan enim nec massa semper eu hendrerit nisl faucibus. Sed lectus ligula, consequat eget bibendum eu, consequat nec nisl. In sed consequat elit. Praesent nec iaculis sapien. <br />Curabitur gravida pretium tincidunt.  </p>
				</div>
				<div class="col store">
					<h4>Store</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Special Offers</a></li>
						<li><a href="#">Log In</a></li>
						<li><a href="#">Account</a></li>
						<li><a href="#">Basket</a></li>
						<li><a href="#">Checkout</a></li>
					</ul>
				</div>
				<div class="col" id="newsletter">
					<h4>Newsletter</h4>
					<p>Lorem ipsum dolor sit amet  consectetur. </p>
					<form action="" method="post">
						<input type="text" class="field" value="Your Name" title="Your Name" />
						<input type="text" class="field" value="Email" title="Email" />
						<div class="form-buttons"><input type="submit" value="Submit" class="submit-btn" /></div>
					</form>
				</div>
				<div class="cl">&nbsp;</div>
				<div class="copy">
					<p>&copy; <a href="#">BestSeller.com</a>. Design by <a href="http://css-free-templates.com/">CSS-FREE-TEMPLATES.COM</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer -->
</body>
</html>