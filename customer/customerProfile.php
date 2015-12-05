<?php
   if(empty($_SESSION)) // if the session not yet started
   session_start();
   //require_once("../connection/dbconnection.php");
   //$sqlu="SELECT * FROM customer WHERE regno=".$_SESSION['registrationID'];
   //$resultu=$conn->query($sqlu);
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
                  echo " ".'<a href="../login/logout.php">(Logout)</a>.';
                  }?></a> 
            </p>
            <p><a href="#" class="cart" ><img src="../css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
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
         <ul id="tabs">
            <li><a href="#profile">My Profile</a></li>
            <li><a href="#orders">My Orders</a></li>
            <li><a href="#python">Python</a></li>
            <li><a href="#ruby">Ruby</a></li>
            <li><a href="#perl">Perl</a></li>
         </ul>
         <div id="profile" class="tab-section">
            <form method="post" action="addcustomerprocess.php" enctype="multipart/form-data">
               <table width="883">
                  <tr>
                     <td height="31" colspan="3">
                        <h3 id="loginh3" align="Left">Hello <?php echo $_SESSION['firstName']." ".$_SESSION['lastName'];?></h3>
                     </td>
                  </tr>
                  <tr>
                     <td width="172" rowspan="5"><img src="images/<?php echo $_SESSION['image'];?>" width="138" height="174"/></td>
                     <td width="99"></td>
                     <td width="166"></td>
                     <td></td>
                     <td></td>
                     <td></td>
                  </tr>
                  <tr>
                     <td height="31">First Name: </td>
                     <td><input type="text" name="firstName" value="<?php echo $_SESSION['firstName']?>"/></td>
                     <td width="8" style="width:10px"></td>
                     <td width="99" height="31">Last Name: </td>
                     <td width="311"><input type="text" name="lastName" value="<?php echo $_SESSION['lastName']?>"/></td>
                  </tr>
                  <tr>
                     <td height="30">Date of Birth: </td>
                     <td height="30"><input type="text" name="dob" value="<?php echo $_SESSION['dob']?>"/></td>
                     <td style="width:10px"></td>
                     <td height="30">Email: </td>
                     <td height="30"><input type="text" name="email" value="<?php echo $_SESSION['email']?>"/></td>
                  </tr>
                  <tr>
                     <td height="45">Contact&nbsp;No:&nbsp;&nbsp; </td>
                     <td height="45"><input type="text" name="contactNo" value="<?php echo $_SESSION['contactNo']?>"/></td>
                  </tr>
                  <tr>
                     <td height="62" style="vertical-align:top">Address: </td>
                     <td><textarea name="address" id="address" cols="30" rows="3"><?php echo $_SESSION['address']?></textarea></td>
                     <td style="width:10px"></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td colspan="2" align="right">
                        <button type="submit" name="update" id="update" class="btn btn-primary">
                        <i class="glyphicon glyphicon-edit"></i>&nbsp;Update</button>
                        <button type="submit" name="delete" id="delete" class="btn btn-primary">
                        <i class="glyphicon glyphicon-remove"></i>&nbsp;Delete</button>					
                     </td>
                  </tr>
               </table>
            </form>
         </div>
         <div id="orders" class="tab-section">
            <h2>Documentation</h2>
            <p>
               The PHP Manual is available online in a selection of languages. Please pick a language from the list below.
            </p>
            <p>
               You can learn how to integrate our online manual with various tools, including your web browser, on our quick reference tips page. You can also get more information about php.net URL shortcuts by visiting our URL how to page.
            </p>
         </div>
         <div id="python" class="tab-section">
            <h2>About Python</h2>
            <p>
               Python is a remarkably powerful dynamic programming language that is used in a wide variety of application domains. Python is often compared to Tcl, Perl, Ruby, Scheme or Java. Some of its key distinguishing features
            </p>
         </div>
         <div id="ruby" class="tab-section">
            <h2>Getting Started</h2>
            <p>
            <h3>Try Ruby!</h3>
            An interactive tutorial that lets you try out Ruby right in your browser. This 15-minute tutorial is aimed at beginners who want to get a feeling of the language.
            </p>
         </div>
         <div id="perl" class="tab-section">
            <h2>Overview of Perl</h2>
            <p>
               This document is intended to give you a quick overview of the Perl programming language, along with pointers to further documentation. It is intended as a "bootstrap" guide for those who are new to the language, and provides just enough information for you to be able to read other peoples' Perl and understand roughly what it's doing, or write your own simple scripts.
            </p>
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