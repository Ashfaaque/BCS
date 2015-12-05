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
	<script src="../js/script.js"></script>
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
					 <li class='has-sub'><a href='printstore.php'><span>Printstore</span></a></li>
                     <li class='has-sub'><a href='../bookstore/bookstore.php'><span>Bookstore</span></a></li>
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
	<div id="main" class="shell" >
        	<div id="sidebar">
            <div id='cssmenu1'>
			<ul>
			   	<li><a href='businesscards.php'><span>Business Cards</span></a></li>
			   	<li class='active has-sub1'><a href='#'><span>Booklets</span></a>
				  <ul>
					 <li class='has-sub1'><a href='#'><span>Booklets-A5</span></a></li>
					 <li class='has-sub1'><a href='#'><span>Booklets - A4</span></a></li>
                     <li class='has-sub1'><a href='#'><span>Booklets - Mini (170x280 mm)</span></a></li>
                     <li class='has-sub1'><a href='#'><span>Booklets - DL (198x210 mm)</span></a></li>
				  </ul>
			   	</li>
				<li><a href='#'><span>Stationery</span></a></li>
				<li class='active has-sub1'><a href='#'><span>Leaflets</span></a>
                   	<ul>
						<li class='has-sub1'><a href='#'><span>Leaflets</span></a></li>
						<li class='has-sub1'><a href='#'><span>Folded Leaflets</span></a></li>
					</ul>
				</li>
                <li class='active has-sub1'><a href='#'><span>Mailing</span></a>
                   	<ul>
						<li class='has-sub1'><a href='#'><span>Postcards</span></a></li>
						<li class='has-sub1'><a href='#'><span>Coupons</span></a></li>
					</ul>
				</li>
				<li><a href='#'><span>Posters</span></a></li>
				<li><a href='#'><span>Folders</span></a></li>
                <li><a href='#'><span>Rack Cards</span></a></li>
                <li><a href='#'><span>Show Cards</span></a></li>                
				<li class='last'><a href='#'><span>Calenders</span></a></li>
			</ul>
		</div>
         </div>
		 
         <!-- End Sidebar -->
         <!-- Content -->
         <!--<div id="content">-->
            <!-- Products -->
            <div class="products">
			
               <!-- End Products -->
            </div>
         </div>
		<!-- End Content -->
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