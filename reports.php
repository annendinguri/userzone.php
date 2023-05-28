<?php
include "database.php";
session_start();

$username=$_SESSION['username'];
$sql = "SELECT * FROM loans WHERE username='$username'";
$result = $database_connection->query($sql);
$error="false";
if( $result->num_rows > 0){
    
  
    $row = $result->fetch_assoc();
    
}else{
    $error="true";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>LOAN REPORTS FOR <?php echo strtoupper( $username );?></h3>
    <h4>loan amount <?php if($error=="true")
    {
    echo 0; }
        else{
            echo $row['amount'];
        }
    ?></h4>
    <h4>date of application <?php if($error=="true")
    {
    echo "no pending loans"; }
        else{
            echo $row['date_applied'];
        }
    ?></h4>
    <h4>payment date <?php if($error=="true")
    {
    echo "no pending loans"; }
        else{
            echo $row['payment_date'];
        }
    ?></h4>
    
</body>
</html>