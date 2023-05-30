<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
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
    <style>
        .top-nav ul{
    list-style-type: none;
    justify-content: space-between;
}
 ul li{
    display: inline-block;
    text-decoration: none;
    color: white;
    margin: 5px;
}
ul li a{
    text-decoration: none;
    color: black;
    font-weight: bolder;
    font-size: 20px;
}
 ul li a:hover{
    color: black;
    background-color: azure;
}
    </style>
</head>
<body>
    <div>
    <nav>
        <div class="dashboard">
            <?php echo "Welcome ".$_SESSION['username'];?>
            <ul>
                <li><a href="dashboard.php?id=profile">Profile</a></li>
                <li><a href="dashboard.php?id=statements">View Statements</a></li>
                <li><a href="dashboard.php?id=loan">Apply Loan</a></li>
                <li><a href="dashboard.php?id=reports">Reports</a></li>
                <li><a href="dashboard.php?id=logout">Logout</a></li>
            </ul>
        </div>
    </nav>
    </div>
</body>
</html>

<?php
if (isset($_GET['id'])){
    $selected = $_GET['id'];
    switch ($selected) {
        case 'profile':
            include_once "profile.php";
            break;

        case 'statements';
        include_once "statements.php";
            echo "You selected View statements ";
            break;

        case 'loan':
            include_once "apply.php";
            echo "You selected Apply loans ";
            break;

        case 'reports':
            include_once "reports.php";
            echo "You selected reports ";
            break;

        case 'logout':
            include_once "login.php";
       
       
    }
}
?>