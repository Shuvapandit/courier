
<html>
<head> </head>

<body style="color:##0a0a0cc0;background-color: #6bb43a;font-size:3rem; text-align:center; padding-top:15rem" >
<?php

$username=$_POST['username'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$address=$_POST['address'];
$placeaddress=$_POST['placeaddress'];
$receiverphonenumber=$_POST['receiverphonenumber'];
$password=$_POST['password'];



$conn =new mysqli('localhost','root','','registrationdatabase');
if ($conn ->connect_error)
{
    die('conncetion failed:' .$conn ->connect_error);
}
else{
    $stmt =$conn->prepare ("insert into regdata (username,phonenumber,email,address,placeaddress,receiverphonenumber, password)  values (?,?,?,?,?,?,?)");
    $stmt ->bind_param("sisssis",$username,$phonenumber,$email,$address,$placeaddress,$receiverphonenumber,$password);
  
}
$stmt ->execute();

echo "Login sucessful";



?>

</body>
</html>