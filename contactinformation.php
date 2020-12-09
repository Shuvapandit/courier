<html>
<head> </head>

<body style="color:cyan;background-color: grey;font-size:3rem; text-align:center; padding-top:15rem" >

<?php


$email=$_POST['Email'];
$message=$_POST['message'];




$conn =new mysqli('localhost','root','','registrationdatabase');
if ($conn ->connect_error)
{
    die('conncetion failed:' .$conn ->connect_error);
}
else{
    $stmt =$conn->prepare ("insert into contactinformation (Email,message)  values (?,?)");
    $stmt ->bind_param("ss",$email,$message);
  
}
$stmt ->execute();

echo "Thank You!Your Massage Submitted.";



?>
</body>
</html>