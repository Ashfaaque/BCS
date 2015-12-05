<?php 
session_start();//To start the session
require_once("../connection/dbconnection.php");
$sqlu="SELECT * FROM bookstore";
$resultu=$conn->query($sqlu);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>GMA Printers</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/styleBookstore.css" type="text/css" media="all" />
	<script type="text/javascript" src="../js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="../js/functions.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link href="../common/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<link href="../common/js/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="../css/tabstyles.css"/>
	<script src="http://code.jquery.com/jquery-latest.js"></script>   
	<script src="../js/tab.js"></script>
	<script src="../js/tab.js"></script>
</head>
<body>
	<!-- Header -->
	<div id="header" class="shell">
		<div id="logo"><img src="../css/images/logo.png" height="50" width="auto"/></div>
        <!-- Login-details -->
		<div id="login-details">
		
			<p>Welcome, <a href="#" id="user">
			<?php 
			if(empty($_SESSION)){ echo "Guest";
			}else{
			echo $_SESSION['firstName']." ".$_SESSION['lastName'];
			echo " ".'<a href="logout.php">(Logout)</a>.';
			}?></a> 
			</p><p><a href="#" class="cart" ><img src="../css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
		</div>
		<!-- End Login-details -->
		<!-- Navigation -->
		<div id='cssmenu'>
            <ul>
               <li><a href='../login/home.php'><span>Home</span></a></li>
               <li class='active has-sub'><a href='#'><span>Services</span></a>
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
			<table width="800px">
            	<tr align="left">
            		<td>Designed by Ashfaaq Mahroof</td>
                    <td>Copyrights &copy; Ash Techys' 2015</td>
            	</tr>
            </table>
			</div>
		</div>
	</div>
	<!-- End Footer -->
</body>
</html>