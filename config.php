<?php 
$connection=mysqli_connect("localhost","root","","abc");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>