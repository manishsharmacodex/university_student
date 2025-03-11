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
    <link rel="stylesheet" href="../font.css">
</head>
<body>
    <h1 class="admin_title">Admin Login Page</h1>
    <form action="#" method="POST" class="admin-form">
        <div class="input-box">
            <label class="form-label-title">User Name</label>
            <input type="text" placeholder="enter the user name" name="userName" class="input-field">
        </div>

        <div class="input-box">
            <label class="form-label-title">Password</label>
            <input type="text" placeholder="enter the password" name="password" class="input-field">
        </div>

        <div class="form-btn">
            <input type="submit" value="LOGIN" name="login" class="login-btn">
        </div>
    </form>


    <script type="text/JavaScript" src=""></script>
</body>
</html>


<!-- code for login crendentails -->
<?php

session_start();

// Sample hard-coded credentials (username and password)
// $valid_username = "ADMIN";
// $valid_password = "PASSWORD123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials
    if ($username == $valid_username && $password == $valid_password) {
        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirect to the dashboard or home page
        header("Location: results/index.php");
        exit;
    } else {
        echo "<p style='color:white;'>Invalid username or password</p>";
    }
}
?>