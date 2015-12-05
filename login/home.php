<?php
   if(empty($_SESSION)) // if the session not yet started
      session_start();
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
   <head>
      <title>GMA Printers</title>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
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
               <li><a href='#'><span>Home</span></a></li>
               <li class='active has-sub'><a style="padding: 12px 20px;" href='#'><span>Services</span></a>
                  <ul>
                     <li class='has-sub'><a href='../service/printstore.php'><span>Printstore</span></a></li>
                     <li class='has-sub'><a href='../bookstore/bookstore.php'><span>Bookstore</span></a></li>
                  </ul>
               </li>
               <li><a href='../service/quotation.php'><span>Quotation</span></a></li>
               <li><a href='login.php'><span>Profile</span></a></li>
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
            <p style="font-size:14px">Welcome, <a href="#" id="user">
               <?php 
                  if(empty($_SESSION)){ echo "Guest";
                  }else{
                  echo $_SESSION['firstName']." ".$_SESSION['lastName'];
                  echo " ".'<a href="logout.php">(Logout)</a>.';
                  }?></a> 
            </p>
            <p><a href="#" class="cart" ><img src="../css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
         </div>
         <!-- End Login-details -->
      </div>
      <!-- End Header -->
      <!-- Slider -->
      <div id="slider" style="padding-top:-10px";>
         <div class="shell">
            <ul>
               <li>
                  <div class="image">
                     <img src="../css/images/print-examples.png" height="260" width="356" alt="" />
                  </div>
                  <div class="details">
                     <h2 style="font-size:40px">Offset Printing</h2>
                     </br>
                     <p class="title">With six offset presses and two digital copiers, we have just the right solution for every job, enabling us to get your project done quickly, efficiently and affordably. Our skilled pressmen have a combined printing experience of over 50 years, bringing you the quality and proffesionalism your job deserves.</p>
                  </div>
               </li>
               <li>
                  <div class="image">
                     <img src="../css/images/digital-print.png" height="260" width="356" alt="" />
                  </div>
                  <div class="details">
                     <h2 style="font-size:40px">Digital Printing</h2>
                     </br>
                     <p class="title">Give your document professional polish and make a great impression. A great solution for printing your annual reports, magazines, brochures and other books or booklets.</p>
                  </div>
               </li>
               <li>
                  <div class="image">
                     <img src="../css/images/duplo-printing.png" height="260" width="356" alt="" />
                  </div>
                  <div class="details">
                     <h2 style="font-size:40px">Duplo Printing</h2>
                     </br>
                     <p class="title">For all your single colored needs. Cheap solution for single or double side printing. Lesser time to print. The best solution for urgent documents printing. A4, A3 Sizes.</p>
                  </div>
               </li>
               <li>
                  <div class="image">
                     <img src="../css/images/booklets.png" height="260" width="356" alt="" />
                  </div>
                  <div class="details">
                     <h2 style="font-size:40px">Booklets</h2>
                     </br>
                     <p class="title">Booklet is still being used as promotional and advertising tools today. These booklets are effective as a professionally feature brand to target market. </p>
                  </div>
               </li>
               <li>
                  <div class="image">
                     <img src="../css/images/bookstore.png" height="260" width="356" alt="" />
                  </div>
                  <div class="details">
                     <h2 style="font-size:40px">Book Store</h2>
                     </br>
                     <p class="title">The bookstore offers you a wide variety of Arabic books from History, religion to school Text books to be purchased online for the best price. The high quality of the books are guranteed. </p>
                  </div>
               </li>
            </ul>
            <div class="nav">
               <a href="#">1</a>
               <a href="#">2</a>
               <a href="#">3</a>
               <a href="#">4</a>
               <a href="#">5</a>
            </div>
         </div>
      </div>
      <!-- End Slider -->
      <!-- Main -->
      <div id="main" class="shell">
         <!-- Sidebar -->
         <div id="sidebar">
            <ul class="categories">
               <li>
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
               </li>
               <li>
                  <h4>Authors</h4>
                  <ul>
                     <li><a href="#">Lorem ipsum dolor</a></li>
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
         <div id="content">
            <!-- Products -->
            <div class="products">
               <h3>Featured Products</h3>
               <ul>
                  <li>
                     <div class="product">
                        <a href="#" class="info">
                        <span class="holder">
                        <img src="../css/images/image01.jpg" alt="" />
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
                        <img src="../css/images/image02.jpg" alt="" />
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
                        <img src="../css/images/image03.jpg" alt="" />
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
                        <img src="../css/images/image04.jpg" alt="" />
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
         </div>
         <!-- End Content -->
         <div class="cl">&nbsp;</div>
      </div>
      <!-- End Main -->
      <!-- Footer -->
      <div id="footer" class="shell">
         <div class="top">
            <div class="cnt">
               <div class="copy">
                  <table width="800px">
                     <tr align="left">
                        <td height="16">Designed by Ashfaaq Mahroof</td>
                        <td>Copyrights &copy; Ashy's Tech 2015</td>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer -->
   </body>
</html>
