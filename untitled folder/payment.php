<?php

require'config.php';

$email = $_POST["pemail"];
$package = $_POST["ppackage"];
$amount = $_POST["pamount"];
$cardname = $_POST["pcardname"];
$cardno = $_POST["pcardno"];
$expire_date = $_POST["pexpire"];
$cvvno = $_POST["pcvvno"];

$sql = "INSERT INTO payment(email,package,amount,cardname,cardno,expire_date,cvvno) VALUES ('$email','$package',$amount,'$cardname',$cardno,'$expire_date',$cvvno)";
if($conn->query($sql)) {
    echo "<script> alert('Recorded added successfully!!!')</script>";
}
else{
    echo "<script> alert('Error: Unsuccessfull')</script>";
    
}
mysqli_close($conn);
?>