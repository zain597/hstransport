<?php 
session_start();
include('inc/header.php');
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
if(!empty($_POST['companyName']) && $_POST['companyName']) {	
	$invoice->saveInvoice($_POST);
	header("Location:invoice_list.php");	
}
?>
<?php if ($_SESSION['role'] == 'admin') {?>

<!DOCTYPE html>
<html>
<head>
  <?php include('inc/header.php');?>
</head>
<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/hstrans3.png" alt="Venue Logo" height="100" width="100">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li ><a href="invoice_list.php">Home</a></li>

                                <li>
                                    <a href="#">Invoice</a>
                                    <ul class="sub-menu">
                                        <li><a href="create_invoice.php">Create Invoive</a></li>
                                        <li><a href="invoice_table.php">Invoice List</a></li>
                                    </ul>
                                </li>

                                <li><a href="https://s3.console.aws.amazon.com/s3/buckets?region=us-east-1" target="_blank">Storage</a></li>

                                <li><a href="https://app.rigbot.com/login" target="_blank">Fleet Tracking</a></li>

                                <li><a href="https://app.qbo.intuit.com/app/homepage" target="_blank">Quickbooks</a></li>

                                <li><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                                <li><a href="logout.php" class="nav-link btn btn-dark">Logout</a></li>

                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner" id="top" style="background-image: url(img/truck21.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Leave the consulting on us. <br> Want to deliver something on time, HS Transport will get it done.</h2>
                        <div class="blue-button">
                            <a href="contact_us.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>OUR STORY</h4>
                            <p>
                            HS Transport was Founded in 2016 by Jabbar Ahmad. We do business in the logistics and Supply Distribution industry. We match the needs of a changing industry, and the desire to create a better experience for businesses and customers alike.
                            Utilize HS Transport’s services for your truckload shipments and experience customized solutions and exceptional support. Our company get to know your business so we can secure the right equipment, negotiate competitive rates, and ensure you have all the tools to be successful. Avoid spending time finding carriers and tracking shipments. HS Transport has you covered.
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-1-720x480.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                      <div class="section-heading">
                          <span>Contact Us</span>
                          <h2>hstranprt@gmail.com</h2>
                      </div>
                      <!-- Modal button -->

                </div>
            </div>
        </section>

    </main>
    <?php include('inc/footer.php');?>
    
</body>
</html>







<?php }else { ?>
    
<!DOCTYPE html>
<html>
<head>
  <?php include('inc/header.php');?>
</head>
<body>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/hstrans3.png" alt="Venue Logo" height="100" width="100">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li ><a href="invoice_list.php">Home</a></li>

                                <li>
                                    <a href="#">Invoice</a>
                                    <ul class="sub-menu">
                                        <li><a href="invoice_table.php">Invoice List</a></li>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                                <li><a href="logout.php" class="nav-link btn btn-dark">Logout</a></li>

                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner" id="top" style="background-image: url(img/truck21.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Leave the consulting on us. <br> Want to deliver something on time, HS Transport will get it done.</h2>
                        <div class="blue-button">
                            <a href="contact_us.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>OUR STORY</h4>
                            <p>
                            HS Transport was Founded in 2016 by Jabbar Ahmad. We do business in the logistics and Supply Distribution industry. We match the needs of a changing industry, and the desire to create a better experience for businesses and customers alike.
                            Utilize HS Transport’s services for your truckload shipments and experience customized solutions and exceptional support. Our company get to know your business so we can secure the right equipment, negotiate competitive rates, and ensure you have all the tools to be successful. Avoid spending time finding carriers and tracking shipments. HS Transport has you covered.
                            </p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-1-720x480.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                      <div class="section-heading">
                          <span>Contact Us</span>
                          <h2>hstranprt@gmail.com</h2>
                      </div>
                      <!-- Modal button -->

                </div>
            </div>
        </section>

    </main>
    <?php include('inc/footer.php');?>
    
</body>
</html>
<?php } ?>
