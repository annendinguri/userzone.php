<?php
if(isset($_POST['signup'])){
    echo "you just hit the server";
    
    echo "this are the values you sent to me";
    echo "<br>";
    echo $_POST['username'];
    echo $_POST['email'];
    echo $_POST['password'];

    $username= $_POST['username'];
    $email=$_POST['email'];
    $password1= $_POST['password'];

    
    include_once "database.php";
    
    $sql="INSERT INTO users (username,email,password1) values('$username', '$email', '$password1')";
    $database_connection->query($sql); 
    
    if ($database_connection->query($sql) === TRUE) {
        echo "Successfully registered";
       }else{
        echo "Registration failed";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="x.css">
</head>
<body>
    <?php
    include_once 'topnav.php';
?>
      <div id="header"></div>

      <div id="form">
      <form action="signup.php" method="post"> 
          
           <input class="form_input" type="text" name="username"  placeholder="enter username"><br>
           <input class="form_input" type="text" name="email"  placeholder="enter email"><br>
           <input  class="form_input" type="text" name="password" placeholder="enter password"><br>
           <input class="form_input" type="submit" name="signup" value="signup" ><br>
       </form>
       
   </div>
    
</body>
</html>
