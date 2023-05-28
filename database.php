<?php
$database_host="localhost";
$database_username="root";
$database_password="";
$database_name="mini_project";

$database_connection=new mysqli($database_host,$database_username,$database_password,$database_name);

if($database_connection->error){
    echo "error";

}
else{
    // echo "success";
}
?>

