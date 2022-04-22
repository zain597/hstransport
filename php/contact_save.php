<?php


require('./config.php');


extract($_POST);


$sql = "INSERT into contact_us (name,email,message,created_at) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}

header("Location: ../invoice_list.php");

?>