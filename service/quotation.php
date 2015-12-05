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
<style type="text/css">
</style>
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
	<div id="main" class="shell">
		<div style="box-shadow: 0px 0px 5px #888888; padding-bottom:20px; border-radius: 15px 50px;">
        	<form method="post" action="addcustomerprocess.php" enctype="multipart/form-data">
		  <table width="860">
		      <tr>
		        <td>&nbsp;</td>
		        <td height="108" colspan="3"><h3 id="loginh3" align="Left">Request a Quote</h3>
		          <h4>Please fill out this form to request us a Quote</h4></td>
	          </tr>
		      <tr>
		        <td width="77" valign="top">&nbsp;</td>
		        <td width="141" height="35" valign="top">Full Name:</td>
		        <td width="240" height="35" valign="top"><input name="fullname" type="text" id="fullname" size="40"/></td>
		        <td width="382" height="35">&nbsp;</td>
		      
	          </tr>
		      <tr>
		        <td valign="top">&nbsp;</td>
		        <td height="35" valign="top">Email:</td>
		        <td height="35" valign="top"><input name="email" type="text" id="email" size="40"/></td>
		        <td height="35"><p style="font-style:italic; font-size: 12px;">* Confirmation that we received your request will be sent here.</p></td>
	          </tr>
		      <tr>
		        <td valign="top">&nbsp;</td>
		        <td height="35" valign="top">Contact&nbsp;No:&nbsp;&nbsp; </td>
		        <td height="35" valign="top"><input name="contactNo" type="text" size="40"/></td>
		        <td height="35">&nbsp;</td>
	          </tr>
		      <tr>
		        <td valign="top">&nbsp;</td>
		        <td height="35" valign="top">Job Name:</td>
		        <td height="35" valign="top"><input name="jobname" type="text" id="jobname" size="40" /></td>
		        <td height="35"><p style="font-style:italic; font-size: 12px;">* Please be sure to remember this name as it is what this job will be referenced to in communications.</p></td>
	          </tr>
		      <tr>
		        <td valign="top">&nbsp;</td>
		        <td height="35" valign="top">Reference No:</td>
		        <td height="35" valign="top"><input name="referenceno" type="text" id="referenceno" size="40" /></td>
		        <td height="35">&nbsp;</td>
	          </tr>
		      <tr>
		        <td valign="top" style="vertical-align:top">&nbsp;</td>
		        <td width="141" height="35" valign="top">Quantity:</td>
		        <td width="240" height="35" valign="top"><input name="fullname" type="text" id="fullname" size="40"/></td>
		        <td height="35" style="width:10px"></td>
	        </tr>
		      <tr>
		        <td valign="top" style="vertical-align:top">&nbsp;</td>
		        <td height="35" valign="top">Colour Specification:</td>
		        <td height="35" valign="top"><input name="email" type="text" id="email" size="40"/></td>
		        <td height="35" style="width:10px"><p style="font-style:italic; font-size: 12px;">* I.E. Full Colour, 2 Pantones (include numbers if you can), Gloss or UV coating</p></td>
	        </tr>
		      <tr>
		        <td valign="top" style="vertical-align:top">&nbsp;</td>
		        <td height="35" valign="top">Finishing:</td>
		        <td height="35" valign="top"><input name="contactNo" type="text" size="40"/></td>
		        <td height="35" style="width:10px"><p style="font-style:italic; font-size: 12px;">* Folding, binding or scoring</p></td>
	        </tr>
		      <tr>
		        <td valign="top" style="vertical-align:top">&nbsp;</td>
		        <td height="35" valign="top">Finish Size:</td>
		        <td height="35" valign="top"><input name="jobname" type="text" id="jobname" size="40" /></td>
		        <td height="35" style="width:10px"><p style="font-style:italic; font-size: 12px;">* Size of the cut and bound document</p></td>
	        </tr>
		      <tr>
		        <td valign="top" style="vertical-align:top">&nbsp;</td>
		        <td height="35" valign="top">Paper Type:</td>
		        <td height="35" valign="top"><input name="referenceno" type="text" id="referenceno" size="40" /></td>
		        <td height="35" style="width:10px"><p style="font-style:italic; font-size: 12px;">* Cover,text or paper weight (Lbs or Pts); Gloss or Matt; or specify a particular brand.</p></td>
	        </tr>
		      <tr>
		        <td valign="top" style="vertical-align:top">&nbsp;</td>
		        <td height="35" valign="top" style="vertical-align:top">Other Specifications:</td>
		        <td height="35" valign="top" style="width:10px"><label>
		          <textarea name="specifications" id="specifications" cols="32" rows="3"></textarea>
	            </label></td>
		        <td height="35" valign="top" style="width:10px"><p style="font-style:italic; font-size: 12px;">* Anything else we should know.</p></td>
	        </tr>
		      <tr>
		        <td valign="top" style="vertical-align:top">&nbsp;</td>
		        <td height="35" valign="top" style="vertical-align:top">Upload a file:</td>
		        <td height="35" valign="top" style="width:10px"><label>
		          <input type="file" name="upload" id="upload" />
	            </label></td>
		        <td height="35" style="width:10px"></td>
	          </tr>
		      <tr>
		        <td></td>
		        <td></td>
		        <td align="left"><button type="submit" name="update" id="update" class="btn btn-primary"> <i class="glyphicon glyphicon-edit"></i>Submit</button></td>
		        <td align="right">&nbsp;</td>
	          </tr>
		</table>
</form>
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