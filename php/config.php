
<?php
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_DATABASE = "invoice_system";
$DB_HOST = "localhost";

$conn = $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);
  
if ($conn->connect_errno) {
    echo "Error: " . $conn->connect_error;
}
?>