<?php
include "database.php";
session_start();
echo  $_SESSION['username'];
$date = date("Y-m-d");
echo $date;
$date1=date('Y-m-d', strtotime($date. ' + 30 days'));
echo $date1;

if(isset($_POST['apply'])){
    
   
    $amount=$_POST['amount'];
    $username=$_SESSION['username'];
    $sql="INSERT INTO loans (username,amount,date_applied,payment_date) values('$username', '$amount', '$date','$date1')";
    // $database_connection->query($sql); 
    
    if ($database_connection->query($sql) === TRUE) {
        header('Location: dashboard.php');
       }else{
        echo "failed";
       }
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
    <form action="apply.php" method="post"> 
        <input type="number" name= "amount" placeholder="enter amount"><br><br>
        <input type="submit" name="apply" value="APPLY LOAN">

    </form>
    
</body>
</html>
