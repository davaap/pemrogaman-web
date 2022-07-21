<?php
$conn = new mysqli('localhost','root','','uas');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_error .') '. $conn->connect_error);
}
?>