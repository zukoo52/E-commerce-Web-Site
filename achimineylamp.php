<?php 
  session_start();
  if(isset($_SESSION['username']))
  {
    session_unset();
    session_destroy();
    header('location:gindex.php');
  }
  elseif(!isset($_SESSION['admin']))
  {
    header('location:gindex.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Acorp &mdash; Cylone Antiques</title>
<!--     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
      function price()
      {
        var price = 5000-(5000*(25/100));
        var x=document.getElementById('sp').innerHTML=price;
      }
    </script>  
    <?php include 'connection.php' ?>
  </head>
  <body onload="price()">
  
 <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong>Phone:</strong> <a href="tel://#">0712342340</a></span>
              <span><strong>Email:</strong> <a href="#">cyloneantiques@acorp.com</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="https://www.facebook.com" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="https://www.twitter.com" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="https://www.instagram.com" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="https://www.linkedin.com" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>
    <!-- ***** Top Search Area Start ***** -->

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Form -->
                        <form method="POST" action="asearch.php">
                            <input type="text" name="insearch" class="form-control" placeholder="Search and hit enter..." >
                              <br>
                            <button type="submit" class="btn btn-primary btn-md" style="margin-left:40%" name="setsearch">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** Top Search Area End ***** -->
        <!-- ***** Admin Model ***** -->  
        <div class="modal fade" id="AdminModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 2000">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Table -->
                        <div>
                            <h2 style="color: green">Admin <span class="icon-supervisor_account"></span></h2>
                            <table cellspacing="0" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th id="t">Account</th>
                                        <th id="t">Security</th>
                                        <th id="t">System Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td id="t">Admin</td>

                                        <td id="t">High</td>

                                        <td id="t">Full</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="logout.php" class="btn btn-danger btn-md" style="margin-left: 75%">LogOut</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** End of the AdminModal ***** -->
    <header class="site-navbar py-4" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-3">
            <h1 class="mb-0 site-logo"><a href="achimineylamp.php" class="text-black h2 mb-0">Chiminey Lamp</a></h1>
          </div>
          <div class="col-12 col-md-9 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="aindex.php">Home</a></li>
                <li class="has-children">
                  <a href="aCategories.php">Categories</a>
                  <ul class="dropdown">
                    <li><a href="aWooden.php">Wooden</a></li>
                    <li><a href="aMetalic.php">Metalic</a></li>
                    <li><a href="aCerimic.php">Cerimic</a></li>
                    <li><a href="aJewells.php">Jewells</a></li>
                  </ul>
                </li>
                <li><a href="aabout.php">About</a></li>
                <li><a href="Messages.php">Messages <span class="icon-message"></span></a></li>
                <li><a href="cartlist.php">Cart List <span class="icon-cart-arrow-down"></span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#AdminModal">Admin <span class="icon-supervisor_account"></span></a></li>
                <li>
                  <a href="#" class="search-icon" data-toggle="modal" data-target="#searchModal">
                      <span class="icon-search"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
            <!-- ***** Breadcrumb Area Start ***** -->
      <div class="breadcrumb-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><span class="icon-home"></span> Home</a></li>
                                <li class="breadcrumb-item"><a href="aCategories.php">Categories</a></li>
                                <li class="breadcrumb-item"><a href="aCerimic.php">Cerimic</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chiminey Lamp</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Breadcrumb Area End ***** -->
    </header>

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="images/chimney lamp.jpg" alt="Image" class="img-fluid">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="aMetalic.php">
                <span class="badge purple mr-1" style="background-color: gray;color: white">Category Metalic</span>
              </a>
            </div>

            <p class="lead">
              <span class="mr-1">
                Rs.<del id="de">5000</del>
              </span>
              Rs.<span id="sp"></span>
            </p>

            <p class="lead font-weight-bold">Description</p>

            <p>This Chiminey Lamp was used by Fedric North.</p>

            <a href="cartlist.php"><button class="btn btn-primary btn-md my-0 p">Go to CartList <span class="icon-cart-arrow-down"></span></button></a>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Additional information</h4>

          <p>It believed to be given by queen Elisabath.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
      <section class="site-section">
      
      <div class="container">
        <center><h3 style="color: gray">Interest in some More</h3></center>
        <br>
        <div class="row">

           <div class="col-md-6 col-lg-4 mb-4">
            <a href="acutter.php" class="media-1">
              <img src="images/cutter.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Cutter</h2>
                <span class="category">Price <p style="color: red">Rs.2000<p></span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <a href="ahanginglamp.php" class="media-1">
              <img src="images/hanging lamp.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Hanging Lamp</h2>
                <span class="category">Price <p style="color: red">Rs.1000<p></span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <a href="airon.php" class="media-1">
              <img src="images/iron.jpg" alt="Image" class="img-fluid">
              <div class="media-1-content">
                <h2>Iron</h2>
                <span class="category">Price <p style="color: red">Rs.3000<p></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>We search for valuble and ancient items,keep them with caution and offer them to you with reasonable prices.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="aabout.php">About Us</a></li>
                  <li><a href="aCategories.php">Categories</a></li>
                  <li><a href="Messages.php">Messages</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://www.twitter.com" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Acorp - Cylone Antiques</p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>