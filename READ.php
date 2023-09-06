<?php
$dbhost="localhost";
$dbuser="root";
$dbname="shakiru";
$dbpassword="";

$conect=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
$sql="SELECT * FROM member";
$result=mysqli_query($conect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
    <style>
        table,th,td{
            background-color: darkgoldenrod;
            padding:1rem;
            margin:1rem;
            border: 1px solid;
        }
        body{
            background-color: darkgoldenrod;
        }
    </style>
</head>
<body>
   <table>
    <thead>
        <tr>
            <th>id</th>
            <th>names</th>
            <th>email</th>
            <th>phone</th>
            <th>password</th>
            <th>operation</th>
        </tr>

    </thead>
    <tbody>
        <?php
        if($result->num_rows>0){
            $i=1;
            while($rows=$result->fetch_assoc()){

        ?> 
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rows ['names']; ?></td>
            <td><?php echo $rows ['email']; ?></td>
            <td><?php echo $rows ['phone']; ?></td>
            <td><?php echo $rows ['password']; ?></td>
           
            <td><button><a href="delete.php? id=<?php echo $rows['id']; ?>">delete</a></button>
            <button><a href="update.php? id=<?php echo $rows['id']; ?>">update</a></button></td>

            <?php $i++; ?>
        </tr>

        <?php
            }

        }
        ?>
    </tbody>
   </table> 
</body>
</html>