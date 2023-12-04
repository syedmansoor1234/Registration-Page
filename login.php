<?php
$con=mysqli_connect("localhost","root");
if($con){
    echo"<script> alert ('Login Successful');</script>";
    // "<script> alert('submitted sucessfully');</script>";

}
else{
    echo"<script> alert ('Login unSuccessful');</script>";  
}
mysqli_select_db($con,"regs");
$email=$_POST["email"];
$password=$_POST["password"];

$query="INSERT INTO login (email,password) Values('$email','$password')";
mysqli_query($con,$query);
?>
