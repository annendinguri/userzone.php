<?php
include "database.php";


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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