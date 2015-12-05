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
      <script src="../common/js/jquery-1.8.3.min.js" type="text/javascript"></script>
      <script src="../common/js/jquery-ui.js" type="text/javascript"></script>
      <script src="../common/js/facebox/facebox.js" type="text/javascript"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
           $('a[rel*=facebox]').facebox({
             loadingImage : '../common/js/facebox/loading.gif',
             closeImage   : '../common/js/facebox/closelabel.png'
           });
         })
      </script>
   </head>
   <body>
      <!-- Header -->
      <div id="header" class="shell">
         <div id="logo"><img src="../css/images/logo.png" height="50" width="auto"/></div>
         <!-- Login-details -->
         <div id="login-details">
            <p>Welcome, <a href="#" id="user">Guest</a> .</p>
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
         <!-- Content -->
         <div>
            <table border="0" width="100%">
               <tr>
                  <td><a href="addBooks.php" rel="facebox"><button class="btn btn-primary">
                     <i class="glyphicon glyphicon-user"></i>
                     Add Book</button></a>
                  </td>
               </tr>
               <tr>
                  <td align="right">Search <input type="text">
                     <button class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                  </td>
               </tr>
               <tr>
                  <td>&nbsp;</td>
               </tr>
               <tr>
                  <td>
                     <table border="1" width="100%">
                        <tr>
                           <th width="11%">&nbsp;</th>
                           <th width="9%" >Book ID</th>
                           <th width="12%" >Book Name</th>
                           <th width="9%" >Author</th>
                           <th width="32%" >Description</th>
                           <th width="9%" >Price</th>
                           <th width="18%">&nbsp;</th>
                        </tr>
                        <?php while($rowu=$resultu->fetch_assoc()){?>
                        <tr>
                           <td height="81" align="center"><img src="images/<?php echo $rowu['bookImage'];?>" width="75px" height="auto"/>&nbsp;</td>
                           <td align="center"><?php echo $rowu['bookID'];?></td>
                           <td align="center"><?php echo $rowu['bookName'];?></td>
                           <td align="center"><?php echo $rowu['bookAuthor'];?></td>
                           <td align="justify" style="padding: 0px 5px 0px 5px"><?php echo $rowu['bookDescription'];?></td>
                           <td align="center">Rs. <?php echo $rowu['bookPrice'];?>.00</td>
                           <td align="right" style="padding:5px">
                              <a class="btn btn-success" href="viewStaff.php?user_id=<?php echo $rowu['user_id']?>" rel="facebox">
                              <i class="glyphicon glyphicon"></i>&nbsp;&nbsp;View</a>
                              <a class="btn btn-info" href="editStaff.php?user_id=<?php echo $rowu['user_id']?>">
                              <i class="glyphicon glyphicon"></i>&nbsp;&nbsp;Edit</a>
                              <a onClick="return del()" class="btn btn-danger" href="deleteStaff.php?user_id=<?php echo $rowu['user_id']?>">
                              <i class="glyphicon glyphicon"></i>&nbsp;&nbsp;Delete</a>
                           </td>
                        </tr>
                        <?php }?>
                     </table>
                  </td>
               </tr>
            </table>
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