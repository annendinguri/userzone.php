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
    <h3>LOAN STATEMENT FOR <?php echo strtoupper( $username );?></h3>
    <h4>loan balance <?php if($error=="true")
    {
    echo 0; }
        else{
            echo $row['amount'];
        }
    ?></h4>
    
</body>
</html>