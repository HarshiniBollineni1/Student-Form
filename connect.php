<?php
$fullname =$_POST['fullname'];
$fathername=$_POST['fathername'];
$personaladdress=$_POST['personaladdress'];
$gender=$_POST['gender'];
$Course=$_POST['Course'];
$City=$_POST['City'];
$District=$_POST['District'];
$State=$_POST['State'];
$phoneno=$_POST['phoneno'];
$bloodgroup=$_POST['bloodgroup'];
$pincode=$_POST['pincode'];
$emailid=$_POST['emailid'];
$interests=$_POST['interests'];
$info=$_POST['info'];

//DATABASE CONNECTION

$conn= new mysqli('localhost','root','','registrationdb');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into student(fullname,fathername,personaladdress,gender,course,city,district,state,phoneno,bloodgroup,pincode,emailid,interests,info)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssisisss",$fullname,$fathername,$personaladdress,$gender,$Course,$City,$District,$State,$phoneno,$bloodgroup,$pincode,$emailid,$interests,$info);
    $stmt->execute();
    echo "Registration Successful..";
    $stmt->close();
    $conn->close();
}

?>