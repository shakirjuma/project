<?php

$dbhost="localhost";
$dbuser="root";
$dbname="shakiru";
$dbpassword="";

$connect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $names=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="INSERT INTO member VALUES('','$names','$email','$phone','$password')";
    $result=mysqli_query($connect,$sql);

    if($result){
    echo "data insert sucssefully";
    header('location:member.php');
}else{
    echo"connection failed";
}


}
?>
   
    
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body> 
    <h1>FILL THE INFORMATION BELOW</h1>
    <form action="conect.php" method="POST">
    names: <br>
    <input type="text" name="names"  placeholder="enter your names"> <br>
    email: <br>
    <input type="email" name="email"  placeholder="enter your email"> <br>
    phone: <br>
    <input type="tel" name="phone" placeholder="enter phone number" id=""> <br>
    password:<br>
    <input type="text" name="password" placeholder="enter password" id=""> <br>
  <input type="submit"name="submit" value="submit">
</form>
</body>
</html>