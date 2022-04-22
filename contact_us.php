<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('inc/header.php');?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
</head>
<body>
<?php if ($_SESSION['role'] == 'admin') {?>
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
                                <li><a href="https://app.qbo.intuit.com/app/homepage" target="_blank">Quickbooks</a></li>


                                <li><a class="nav-link" href="contact_us.php">Contact Us</a></li>
                                <li><a href="logout.php" class="nav-link btn btn-dark">Logout</a></li>

                            </ul>
                        </nav><!-- / #primary-nav -->
                        
                    </div>
                    <div class="col-md-12">
                        <table id="tblUser">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>message</th>
                                    <th>date</th>
                                </tr>
                            </thead>
                            <?php
                            require_once('./php/config.php');
                            $sql = "SELECT name, email, message, created_at FROM contact_us";
                            $result = $conn->query($sql);
                            $arr_users = [];
                            if ($result->num_rows > 0) {
                                $arr_users = $result->fetch_all(MYSQLI_ASSOC);
                            }
                            ?>
                            <tbody>
                                <?php if(!empty($arr_users)) { ?>
                                    <?php foreach($arr_users as $user) { ?>
                                        <tr>
                                            <td><?php echo $user['name']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['message']; ?></td>
                                            <td><?php echo $user['created_at']; ?></td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>message</th>
                                    <th>date</th>
                                </tr>
                            </tfoot>
                        </table>
 
                    </div>
                </div>
            </div>
        </header>
    </div> 

    <main>

        <!-- 
        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Team</span>
                            <h2>HS-Transport</h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>




    <?php }else { ?>
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
    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-3-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <form method="post" action="php/contact_save.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                        </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                        <fieldset>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Email..." required="">
                                        </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                        </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                        <fieldset>
                                            <div class="blue-button">
                                                <button type="submit" id="contact_form" class="btn" style="border: 2px solid #4883ff;background-color: #4883ff;display: inline-block;color: #fff;font-size: 15px;font-weight: 500;padding: 10px 16px;text-decoration: none;transition: all 0.5s;">
                                                    Send Message
                                                </button>
                                            </div>
                                        </fieldset>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content"> 
                                            <p>
                                                Leave the consulting on us. Want to deliver something on time, HS Transport will get it done.
                                            </p>
                                            <ul>
                                                <li><span>Phone:</span><a href="#">+1 703 440 5566</a></li>
                                                <li><span>Email:</span><a href="#">hstranprt@gmail.com</a></li>
                                                <li><span>Address:</span><i class="fa fa-map-marker"></i> 10316 Spring Iris Drive, Bristow, VA 20136</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
    </main>
    <?php } ?>


    <?php include('inc/footer.php');?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('#tblUser').DataTable( {
            "order": [[ 2, "asc" ]],
            "processing": true,
            "serverSide": true,
            "ajax": "server_processing.php"
        } );
    } );
    </script>
    
</body>
</html>