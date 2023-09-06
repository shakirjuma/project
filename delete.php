<?php
$dbhost="localhost";
$dbuser="root";
$dbname="shakiru";
$dbpassword="";

$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(isset($_GET['id'])){
    $user_id= $_GET['id'];

    $sql="DELETE FROM `member` WHERE `id` ='$user_id'";

    $result= $conn->query($sql);

    // $sql_update_ids="SET @counter = 0 UPDATE 'online' SET id=@counter := @counter + ;";
    // mysli_multi_query($conn, $sql_update_ids);
    // header("location:READ.php");
    // exit();

    if($result == TRUE){
        echo "Record delete correct";
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}
?>