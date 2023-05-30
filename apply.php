<?php
include "database.php";

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="apply.php" method="post"> 
        <input type="number" name= "amount" placeholder="enter amount"><br><br>
        <input type="submit" name="apply" value="APPLY LOAN">

    </form>
    
</body>
</html>
