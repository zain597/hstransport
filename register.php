
<?php
session_start();
// initializing variables
$first_name = "";
$last_name = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'invoice_system');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pwd']);
  $mobile = '0900';
  $address = '10316 Spring Iris Drive, Bristow, VA 20136';
  $role = 'user';

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "firstname is required"); }
  if (empty($last_name)) { array_push($errors, "lastname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same name and/or email
  $user_check_query = "SELECT * FROM invoice_user WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO invoice_user (first_name, last_name, email, password, mobile, address, role) 
  			  VALUES('$first_name','$last_name','$email','$password','$mobile','$address','$role')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $fistname;
  	$_SESSION['success'] = "You are now logged in";
    
    header("Location:invoice_list.php");
  }else{
    header('Location: index.php');
  }
}
