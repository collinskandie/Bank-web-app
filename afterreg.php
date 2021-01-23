 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>KCB online banking </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="css/all.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper-main">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="social-media">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-details">
                        <ul>
                            <li><i class="fas fa-phone fa-rotate-90"></i> +01 899 286 777</li>
                            <li><i class="fas fa-map-marker-alt"></i> 8/99 , North khailkoir, NY</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Online Banking Forms</h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="regaccoun.html">Register</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="Loan.html">Loan form</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="withraw.html">Withrawal form</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="deposit.html">Deposit form</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>    
   <p class="mb10">Your account has been created successfullt. the following are your account details.</p>
   <?php
 include("config.php");
   error_reporting(E_ALL);
  ini_set('display_errors', '1');
   
   $query = "SELECT MAX(Account_number) FROM account_info";


echo '<table border="1 " cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Account Number</font> </td> 
          <td> <font face="Arial">Account Type</font> </td> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">last name</font> </td> 
          <td> <font face="Arial">Phone number</font> </td> 
      </tr>';

if ($result = $db->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row['Account_number'];
        $field2name = $row['Account_type'];
        $field3name = $row['First_name'];
        $field4name = $row['Last_name'];
        $field5name = $row['Phone_number']; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
    <div class="container">
        <!-- Image Header -->
        
        <!-- Contact Us -->
        <div class="touch-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>KCB Group PLC and Atlas Mara Limited Sign Acquisition Deal for Rwanda, Tanzania Banking Businesses.<br>
                        The Proposed transaction will see KCB acquire Banque Populaire du Rwanda Plc (BPR) and African Banking Corporation Tanzania (BancABC).Nov 26 2020.</p>
                    </div>                    
                </div>
            </div>
        </div>

        <!-- /.container -->
        <!--footer starts from here-->
        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">KCB Bank Kenya Limited is a financial services provider headquartered in Nairobi, Kenya. It is licensed as a commercial bank, by the Central Bank of Kenya, the national banking regulator. The bank has also been running Agency banking model.</p>
                        <ul class="footer-social">
                            <li><a class="facebook hb-xs-margin" href="#"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
                            <li><a class="twitter hb-xs-margin" href="#"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
                            <li><a class="instagram hb-xs-margin" href="#"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
                            <li><a class="googleplus hb-xs-margin" href="#"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-google-plus-g"></i></span></a></li>
                            <li><a class="dribbble hb-xs-margin" href="#"><span class="hb hb-xs spin hb-dribbble"><i class="fab fa-dribbble"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="services.html"><i class="fas fa-long-arrow-alt-right"></i>Open Account</a></li>
                            <li><a href="services.html"><i class="fas fa-long-arrow-alt-right"></i>Get a loan</a></li>
                            <li><a href="services.html"><i class="fas fa-long-arrow-alt-right"></i>Save Money </a></li>
                            <li><a href="about.html"><i class="fas fa-long-arrow-alt-right"></i>About Us</a></li>
                            <li><a href="services.html"><i class="fas fa-long-arrow-alt-right"></i>Our Services</a></li>
                            <li><a href="contact.html"><i class="fas fa-long-arrow-alt-right"></i>Get In Touch</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <!--headin5_amrc ends here-->
                        <ul class="footer_ul2_amrc">
                            <li>
                                <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Follow us on twitter<a href="#"></a></p>
                            </li>
                          
                        </ul>
                        <!--footer_ul2_amrc ends here-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="news-box">
                            <h5 class="headin5_amrc col_white_amrc pt2">Our History</h5>
                            <p>We are proud of our history and heritage which is rooted as far back as the nineteenth century. Take a look at how far we have come since our inception, back in 1896. Start scrolling to explore</p>
                            <form action="#">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search for..." type="text">
                                    <span class="input-group-btn">
                                  <button class="btn btn-secondary" type="button">Go!</button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/filter.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>         
         