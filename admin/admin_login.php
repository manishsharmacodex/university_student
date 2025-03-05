<?php
    include("../server/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="./admin_login.css">
</head>
<body>
    <h1 class="admin_title">Admin Login Page</h1>
    <form action="#" method="POST" class="admin-form">
        <div class="input-box">
            <label class="form-label-title">User Name</label>
            <input type="text" placeholder="enter the user name" class="input-field">
        </div>

        <div class="input-box">
            <label class="form-label-title">Password</label>
            <input type="text" placeholder="enter the password" class="input-field">
        </div>

        <div class="form-btn">
            <input type="submit" value="LOGIN" class="login-btn">
        </div>
    </form>


    <script type="text/JavaScript" src=""></script>
</body>
</html>