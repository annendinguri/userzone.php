<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="x.css">
</head>
<body>

   
    <?php
    include_once 'topnav.php';
    ?>
    <div id="header"></div>
<div id="form">
       
       <form action="" method="POST"> 
          
           
           <input class="form_input" type="text" name="username"  placeholder="enter username"><br>
           <input  class="form_input" type="text" name="password" placeholder="enter password"><br>
           <input class="form_input" type="submit" name="login" value="login" ><br>
       </form>
   </div>
    
</body>
</html>

<?php
if (isset($_POST['login'])) {
    echo "You clicked login";
    $username  = $_POST['username'];
    $password1 = $_POST['password'];
    echo $username. " ". $password1;

    include_once "database.php";
echo "<br>";
    $sql = "SELECT * FROM users WHERE username='$username' AND password1='$password1'";
    $result = $database_connection->query($sql);
    if($result->num_rows > 0){
        $_SESSION['username']= $username;
        header('Location: dashboard.php');
    }else{
        echo "User not found";
    }
}


?>