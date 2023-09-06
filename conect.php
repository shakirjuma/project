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
   
    
   