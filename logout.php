<?php
session_start();

if(isset($_session['username'])){
    session_destroy();
    header('Location: login.php');
}


?>