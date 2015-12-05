<?php
   session_start();
       /*** begin the session ***/
       if(!empty($_SESSION['firstName']))
       {
       header('Location:../customer/customerProfile.php');
   	}
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
            </p>
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
      <div id="main" class="shell" align="center" style="padding-top:90px">
         <div id="rcorners2">
            <form action="validate.php" method="post" name="loging" id="loging" onSubmit="return checkLogin()">
            <table border="0" width="300" align="center">
                  <tr>
                     <td>&nbsp;
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2" align="center">
                        <h3 id="loginh3">Login</h3>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2"><span id="error">
                        <?php
                           //To display an error
                           	if(isset($_REQUEST['id'])){
                           
                           echo $_REQUEST['id'];	
                           }
                           ?>
                        </span>&nbsp;
                  </td>
                  </tr>
                  <tr>
                     <td height="35">User Type:</td>
               <td><select name="type" style="width:180px">
                           <option value="customer">Customer</option>
                           <option value="staff">Staff</option>
                        </select></td>
                  </tr>
                  <tr>
                     <td height="43">User Name:</td>
                    <td><input type="text" name="uname" id="uname" size="40" 
                        placeholder="User Name" /></td>
                 </tr>
                  <tr>
                     <td>Password:</td>
                     <td><input type="password" name="pass" id="pass" size="40"
                        placeholder="Password" /></td>
                  </tr>
                  <tr>
                     <td>
                        <br />
                        <button type="submit" name="login" id="login"  class="btn btn-primary">
                        <span class="glyphicon glyphicon-log-in"> Login</span> 
                        </button>
                     </td>
                  </tr>
               </table>
        </form>
            <br/>
            <p style="color: #0182b5">Please register <a style="color:#F00" href="registeration.php">here</a> if you are not a member. </p>
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