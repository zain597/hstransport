<?php 
session_start();
include('inc/header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']); 
	if(!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name']."".$user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];		
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		$_SESSION['role'] = $user[0]['role'];
		header("Location:invoice_list.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
  <div class="info">
    <h1><strong>HS Transports</strong></h1>
    <span >Track your truck via HS transports</span>
  </div>
</div>
<div class="form">
    <div class="thumbnail"><img src="images/truck.svg" style="margin-bottom: 10px;"/>
    </div>
    <form class="register-form" action="register.php" method="post">
    <input type="text" name="first_name" placeholder="Firstname"/>
    <input type="text" name="last_name" placeholder="Lastname"/>
      <input type="text" name="email" placeholder="Email Address"/>
      <input type="password" name="pwd" placeholder="Password"/>
      <button type="submit" name="reg_user">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form method="post" action="" class="login-form">
      <div class="form-group">
        <?php if ($loginError ) { ?>
          <div class="alert alert-warning"><?php echo $loginError; ?></div>
        <?php } ?>
      </div>
      <input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus="" >
      <input type="password" class="form-control" name="pwd" placeholder="Password" >
      <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3" name="role" aria-label="Default select example" style="margin-bottom: 5px;">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
		  </select>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
</div>
<script src="js/login.js"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<script src="js/dashboard.js"></script>
</body>
</html>
