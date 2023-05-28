<?php session_start();
    if (!isset($_SESSION['username'])){
        
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
    <div>
        <h6><?php echo "Welcome " . $_SESSION['username']; ?></h6>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?id=profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="statements.php">View statements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="apply.php">Apply loans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php?id=logout">Logout</a>
                </li>
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

        case 'statements':
            echo "You selected View statements ";
            break;

        case 'loans':
            echo "You selected Apply loans ";
            break;

        case 'reports':
            echo "You selected reports ";
            break;

        case 'logout':
            include_once "login.php";
       
        default:
            echo "404 file not found";
        break;
    }
}
?>