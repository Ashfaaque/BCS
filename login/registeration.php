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
   </head>
   <body>
      <!-- Header -->
      <div id="header" class="shell">
         <div id="logo"><img src="../css/images/logo.png" height="50" width="auto"/></div>
         <!-- Login-details -->
         <div id="login-details">
            <p>Welcome, <a href="#" id="user">Guest</a> .</p>
            <p><a href="#" class="cart" ><img src="../css/images/cart-icon.png" alt="" width="20" height="17"/></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
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
      <div id="main" class="shell" align="center">
         <div id="rcorners2">
            <form method="post" action="addcustomerprocess.php" enctype="multipart/form-data">
               <table width="400px">
                  <tr>
                     <td height="31" colspan="2">
                        <h3 id="loginh3" align="center">
                        Customer Registration</h4>
                     </td>
                  </tr>
                  <tr>
                     <td height="31">Username: </td>
                     <td><input type="text" name="username" required="required"/></td>
                  </tr>
                  <tr>
                     <td height="31">Password: </td>
                     <td><input type="password" name="password" required="required"/></td>
                  </tr>
                  <tr>
                     <td height="31">Confirm Password: </td>
                     <td><input type="password" name="confirmPW" required="required"/></td>
                  </tr>
                  <tr>
                     <td height="31">Registration ID: </td>
                     <td><input type="text" name="registrationID" required="required"/></td>
                  </tr>
                  <tr>
                     <td height="31">First Name: </td>
                     <td><input type="text" name="firstName" required="required"/></td>
                  </tr>
                  <tr>
                     <td height="31">Last Name: </td>
                     <td><input type="text" name="lastName" required="required"/></td>
                  </tr>
                  <tr>
                     <td height="34">Date of Birth: </td>
                     <td><input type="text" name="dob" required="required"/></td>
                  </tr>
                  <tr>
                     <td height="27">Email: </td>
                     <td><input type="text" name="email" required/></td>
                  </tr>
                  <tr>
                     <td height="34">Contact&nbsp;No:&nbsp;&nbsp; </td>
                     <td><input type="text" name="contactNo"/></td>
                  </tr>
                  <tr>
                     <td height="31" style="vertical-align:top">Address: </td>
                     <td><textarea name="address" id="address" cols="30" rows="3"></textarea></td>
                  </tr>
                  <tr>
                     <td height="37">Image: </td>
                     <td><input type="file" name="image"/></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td align="right"><button type="submit" name="save" id="save" class="btn btn-primary">
                        <i class="glyphicon glyphicon-save"></i>&nbsp;Save</button>
                     </td>
                  </tr>
               </table>
            </form>
         </div>
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