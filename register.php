<?php
$con=mysqli_connect("localhost","root");
if ($con){
    echo"<script> alert ('Register Successful');</script>";
}
else{
    echo"<script> alert ('Register Unsuccessful');</script>";
}
mysqli_select_db($con,"regs");
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$query="INSERT INTO register (name,email,password,address,phone) VALUES ('$name','$email','$password','$address','$phone')";
mysqli_query($con,$query);
?>