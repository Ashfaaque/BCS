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
			}?>
      </a> </p>
    <p><a href="#" class="cart" ><img src="../css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
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
<div id="main" class="shell" style="height:1000px" >
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
  <div id="content">
    <h3>Business Cards</h3>
    <p>Never miss a business opportunity with professionally designed high quality business cards.</p>
    <p> Your design: Simply upload a sketch of how you want your business cards to look. Or upload a digital file of your logo and describe in the instructions field your desired layout. </p>
    <p>Prices exclude GST.</p>
    <p> Please note that these prices are based on you providing complete supplied, useable files.  If you are requesting the design to be completed by Silverdale Design & Print, the price will need to be confirmed by phoning us direct on 0800 SILPRINT. These prices are based on single sided business cards, leaflets or flyers. </p>
    <hr />
    <h4>Purchase </h4>
    <table width="635">
      <tr>
        <td width="105" height="30" align="right" scope="row">Qty:&nbsp;&nbsp;</td>
        <td width="99" height="30"><input type="radio" name="qty" value="250">
          250</td>
        <td width="292" height="30">Rs. 750.00</td>
      </tr>
      <tr>
        <td height="30" align="right">&nbsp;</td>
        <td height="30"><input type="radio" name="qty" value="500" />
          500</td>
        <td height="30">Rs. 1000.00</td>
      </tr>
      <tr>
        <td height="30" align="right">&nbsp;</td>
        <td height="30"><input type="radio" name="qty" value="1000" />
          1000</td>
        <td height="30">Rs. 1600.00</td>
      </tr>
      <tr>
        <td height="30" align="right">&nbsp;</td>
        <td height="30"><input type="radio" name="qty" value="1500" />
          1500</td>
        <td height="30">Rs. 2100.00</td>
      </tr>
      <tr>
        <td height="30" align="right">&nbsp;</td>
        <td height="30"><input type="radio" name="qty" value="2000" />
          2000</td>
        <td height="30">Rs. 2500.00</td>
      </tr>
      <tr>
        <td height="43" align="right">Design&nbsp;Service:&nbsp;&nbsp;</td>
        <td height="43" colspan="2"><label>
            <select name="select" id="select" style="height:30px;">
              <option value="no" style="font-size:14px">I will supply the finished artwork</option>
              <option value="yes" style="font-size:14px">Please create the design based on my instructions</option>
            </select>
          </label></td>
      </tr>
      <tr>
        <td height="42" align="right">Artwork/Sketch:&nbsp;&nbsp;</td>
        <td height="42" colspan="2"><input type="file" value="artwork"/></td>
      </tr>
      <tr>
        <td height="30" align="right">&nbsp;</td>
        <td height="30" colspan="2"><p style="font-size:10px">Upload a sketch of how you want your printed items to appear. Or upload   artwork in finished format such as Adobe PDF, Indesign, Illustrator, EPS   etc. For multiple files save as a ZIP file or email us at gmaprinters@gmail.com</p></td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top">Instructions:&nbsp;&nbsp;</td>
        <td height="30" colspan="2"><textarea name="instructions" id="instructions" cols="45" rows="4"></textarea>
          <p style="font-size:10px">Give us detailed instructions of how you would like your items to appear. Our designers will provide you with a proof via email.</p></td>
      </tr>
    </table>
    <hr />
    <h4>How to order online</h4>
    <p><b>Prices include design and proof:</b><br />
      Once we have designed your items and have your artwork on file you can re-order at a reduced rate for each subsequent order that uses that artwork without modification.<br />
      <br />
      <b>Shipping NZ-Wide:</b><br />
      We will send your items by standard courier. In the case where your package exceeds our courier maximum size will will notify you of any additional charges.<br />
      <br />
      <b> Artwork Specifications:</b>for fonts and acceptable file formats see our Artwork Specifications page.</p>
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