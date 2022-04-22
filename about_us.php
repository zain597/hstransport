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
                                <li><a href="invoice_list.php">Home</a></li>

                                <li>
                                    <a href="#">Invoice</a>
                                    <ul class="sub-menu">
                                        <li><a href="create_invoice.php">Create Invoive</a></li>
                                        <li><a href="invoice_table.php">Invoice List</a></li>
                                    </ul>
                                </li>

                                <li><a href="https://s3.console.aws.amazon.com/s3/buckets?region=us-east-1" target="_blank">Storage</a></li>

                                <li><a href="https://app.rigbot.com/login" target="_blank">Fleet Tracking</a></li>

                                <li><a href="https://app.qbo.intuit.com/app/homepage"target="_blank">Quickbooks</a></li>

                                <li><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div> 
    <section class="banner banner-secondary" id="top" style="background-image: url(./assets/img/truck777.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>About Us</h2>
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
                            <h4>About us</h4>
                            <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst. Vel sequi odit similique repudiandae ipsum iste, quidem tenetur id impedit, eaque et, aliquam quod.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure cupiditate id unde quis ut maxime, accusantium aperiam consectetur saepe delectus ducimus accusamus, ad doloremque ea. Quam, suscipit quidem perspiciatis asperiores, libero cum saepe hic pariatur eos deleniti illum minima minus.</p>
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
                          <span>Lorem ipsum dolor.</span>
                          <h2>Vivamus nec vehicula felis</h2>
                      </div>
                      <!-- Modal button -->

                      <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi blanditiis, esse deserunt assumenda! Tempora nulla natus illum soluta quasi, nisi, in quaerat cumque corrupti ipsum impedit necessitatibus expedita minus harum, fuga id aperiam autem architecto odio. Perferendis eius possimus ex itaque tenetur saepe id quis dicta voluptas, corrupti sapiente hic!</p>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>

        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Team</span>
                            <h2>Lorem ipsum dolor sit amet</h2>
                        </div>
                    </div> 
                </div> 

                <div class="owl-carousel owl-theme">
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-1-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>John Doe</h4>
                                <span>CEO</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-2-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Jane Doe</h4>
                                <span>Marketing Manager</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-3-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Paula Jeorge</h4>
                                <span>Customer Service</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item popular-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="img/team-image-4-646x680.jpg" alt="">
                            </div>
                            <div class="text-content">
                                <h4>Dan Blatan</h4>
                                <span>Customer Service</span>
                            </div>
                            <div class="plus-button">
                                <a href="team.html"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('inc/footer.php');?>
    
</body>
</html>