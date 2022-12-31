<?php

require'config.php';

$FullName = $_POST["fullName"];
$UserName = $_POST["Username"];
$Email = $_POST["email"];
$PhoneNumber = $_POST["phoneNumber"];;
$UPassword = $_POST["password"];
$ConfirmPassword = $_POST["confirmpassword"];
$Gender = $_POST["gender"];

$sql = "INSERT INTO register(FullName,UserName,Email,PhoneNumber,UPassword,ConfirmPassword,Gender) VALUES ('$FullName','$UserName','$Email',$PhoneNumber,'$UPassword','$ConfirmPassword','$Gender')";
if($conn->query($sql)) {
    echo "<script> alert('Recorded added successfully!!!')</script>";
    
}
else{
    echo "<script> alert('Error: Unsuccessfull')</script>";
}
mysqli_close($conn);
?>