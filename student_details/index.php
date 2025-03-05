<?php
    include("../server/connection.php");
?>


<!-- code for admin pannel for new student -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body style="padding: 20px 100px;">
    <h1 class="home-title">Admin Pannel - Add New Student</h1>
            <form action="#" method="POST" class="form">
                <div class="input-box">
                    <label class="input-label">Roll Number</label>
                    <input type="text" name="roll_number" placeholder="Enter Your Roll Number" class="input-field">
                </div>

                <div class="input-box">
                    <label class="input-label">Student Name</label>
                    <input type="text" name="student_name" placeholder="Enter Your Name" class="input-field">
                </div>

                <div class="input-box">
                    <label class="input-label">School Department</label>
                    <select name="student_department" class="select">
                        <option value="Not Selected">Select School Department</option>
                        <option value="BCA">BCA</option>
                        <option value="MCA">MCA</option>
                        <option value="B.TECH">B.TECH</option>
                        <option value="M.TECH">M.TECH</option>
                    </select>
                </div>

                <div class="form-btn">
                    <input type="submit" name="submit" value="ADD NEW STUDENT" class="search-btn">
                </div>

                <div class="form-desc">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem iusto impedit, possimus ratione incidunt necessitatibus reiciendis labore sit. Veniam sequi voluptate aut consequatur nam illo, ad quo quas unde a! Libero adipisci ut quaerat officia odit ratione maiores, in, aliquam corporis expedita nemo.</p>
                </div>

                <div class="form-copy">
                    <p>2025 &copy; Sushant University All Rights Reserved</p>
                </div>
            </form>

    <script type="text/JavaScript" src="../js/script.js"></script>
</body>
</html>



<!-- code for insert data into database in xampp server -->
<?php

    if (isset($_POST['submit'])) {
        $student_roll_number    = $_POST['roll_number'];
        $student_name           = $_POST['student_name'];
        $student_department     = $_POST['student_department'];

        $query = "INSERT INTO university_student.student_result (student_roll_number,student_name,student_department) VALUES('$student_roll_number','$student_name','$student_department')";

        $data = mysqli_query($conn,$query);
        if ($data) {
        echo "New Student Have Been Added in Database";
        } else {
        echo "Failed Added New Student";
        }
    }
?>