<?php

require'config.php';

$FullName = $_POST["fullname"];
$Email = $_POST["email"];
$PhoneNO = $_POST["phone"];
$Package = $_POST["package"];
$Massage = $_POST["massage"];


$sql = "INSERT INTO register(FullName,Email,PhoneNO,Package,Massage) VALUES ('$FullName','$Email', $PhoneNO,'$Package','$Massage')";
if($conn->query($sql)) {
    echo "<script> alert('Recorded added successfully!!!')</script>";
    
}
else{
    echo "<script> alert('Error: Unsuccessfull')</script>";
}
mysqli_close($conn);
?>