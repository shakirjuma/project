<?php

$dbhost="localhost";
$dbuser="root";
$dbname="shakiru";
$dbpassword="";

$conect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_POST['update'])){
    $id=$_POST['id'];
   
    $names=$_POST['names'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
  
   
    

    $sql="UPDATE member SET  names='$names', email='$email', phone='$phone', password='$password' WHERE id='$id'";
    $result=mysqli_query($conect,$sql);
}
?>

<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="SELECT * FROM member WHERE id='$id'";
    $result=mysqli_query($conect,$sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $names=$row['names'];
            $email=$row['email'];
            $phone=$row['phone'];
            $password=$row['password'];

    
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
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>"><br><br>
    names: <br>
    <input type="text" name="names" values="<?php echo $names;?>"> <br>
    email: <br>
    <input type="email" name="email" values="<?php echo $email;?>"> <br>
    phone: <br>
    <input type="tel" name="phone"values="<?php echo $phone;?>"> <br>
    password:<br>
    <input type="text" name="password"values="<?php echo $password;?>"> <br>
  <input type="submit"name="update" value="update">
</form>
</body>
</html>
<?php

    }
}
?>