<?php
    include("../server/connection.php");
?>

<!-- code for search data from database -->
<?php

    if (isset($_POST['search'])) {
        $roll_number                    = $_POST['roll_number'];
        $maths_marks                    = $_POST['maths'];
        $dbms_marks                     = $_POST['dbms'];
        $dsa_marks                      = $_POST['dsa'];
        $operating_system_marks         = $_POST['operating_system'];
        $java_marks                     = $_POST['java'];
        $student_status                 = $_POST['student_status'];

        $query = "SELECT * FROM university_student.bca_results WHERE roll_number = '$roll_number'";

        $data = mysqli_query($conn,$query);
        $result = mysqli_fetch_assoc($data);

        if ($result) {
            $maths_marks = $result['maths'];
            // echo $maths_marks;
        } else {
            echo "Sorry Not Found Records Given Roll Number";
        }
    }

?>




<!-- code for admin pannel for new student -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Update</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="../font.css">
</head>
<body style="padding: 5px 100px;">
    <h1 class="home-title">BCA - Student Marks Add / Update</h1>
            <form action="#" method="POST" class="form">
                <div class="input-box">
                    <label class="input-label">Roll Number</label>
                    <input type="text" name="roll_number" placeholder="Enter Student Roll Number" class="input-field" value="<?php
                        if (isset($_POST['search'])) {
                            echo $result['roll_number'];
                        }
                    ?>">
                </div>

                <!-- button for student search data from database -->
                <input type="submit" name="search" value="STUDENT SEARCH" style="border: none; outline: none; width: 100%; height: 40px; background-color: gray; color: #fff; font-size: 16px; font-weight: bolder; cursor: pointer;">

                <div class="input-box">
                    <label class="input-label">Maths</label>
                    <input type="text" name="maths" placeholder="Enter Maths Marks" class="input-field" value="<?php
                        if (isset($_POST['search'])) {
                            echo $result['maths'];
                        }
                    ?>">
                </div>

                <div class="input-box">
                    <label class="input-label">DBMS</label>
                    <input type="text" name="dbms" placeholder="Enter DBMS Marks" class="input-field" value="<?php
                        if (isset($_POST['search'])) {
                            echo $result['dbms'];
                        }
                    ?>">
                </div>

                <div class="input-box">
                    <label class="input-label">DSA</label>
                    <input type="text" name="dsa" placeholder="Enter DSA Marks" class="input-field" value="<?php
                        if (isset($_POST['search'])) {
                            echo $result['dsa'];
                        }
                    ?>">
                </div>

                <div class="input-box">
                    <label class="input-label">Operating System</label>
                    <input type="text" name="operating_system" placeholder="Enter Operating System Marks" class="input-field" value="<?php
                        if (isset($_POST['search'])) {
                            echo $result['os'];
                        }
                    ?>">
                </div>

                <div class="input-box">
                    <label class="input-label">JAVA</label>
                    <input type="text" name="java" placeholder="Enter Java Marks" class="input-field" value="<?php
                        if (isset($_POST['search'])) {
                            echo $result['java'];
                        }
                    ?>">
                </div>

                <div class="input-box">
                    <label class="input-label">Result Status</label>
                    <select name="student_status" class="select">
                        <option value="Not Selected">Select Result Status</option>
                        <option value="Pass" <?php
                            if ($result['results_status'] == 'Pass') {
                                echo "Selected";
                            }
                        ?>>PASS</option>

                        <option value="Fail" <?php
                            if ($result['results_status'] == 'Fail') {
                                echo "Selected";
                            }
                        ?>>FAIL</option>

                        <option value="UFM" <?php
                            if ($result['results_status'] == 'UFM') {
                                echo "Selected";
                            }
                        ?>>UFM - (Unfair Means)</option>
                        
                        <option value="Absent" <?php
                            if ($result['results_status'] == 'Absent') {
                                echo "Selected";
                            }
                        ?>>ABSENT</option>
                    </select>
                </div>

                <div class="form-btn">
                    <!-- button for add marks -->
                    <input type="submit" name="submit" value="ADD MARKS" class="search-btn" style="margin-left: 30px;">


                    <!-- button for update marks -->
                    <input type="submit" name="update" value="UPDATE MARKS" class="update" style="background: red; color: white; width : 100%; height: 40px; cursor: pointer; border: none; margin-left: 10px; margin-right: 50px;">
                </div>
            </form>

    <script type="text/JavaScript" src="../js/script.js"></script>
</body>
</html>



<!-- code for insert data into database in xampp server -->
<?php

    if (isset($_POST['submit'])) {
        $student_roll_number        = $_POST['roll_number'];
        $maths_marks                = $_POST['maths'];
        $dbms_marks                 = $_POST['dbms'];
        $dsa_marks                  = $_POST['dsa'];
        $operating_system_marks     = $_POST['operating_system'];
        $java_marks                 = $_POST['java'];
        $student_status             = $_POST['student_status'];

        $query = "INSERT INTO university_student.bca_results (roll_number,maths,dbms,dsa,os,java,results_status) VALUES('$student_roll_number','$maths_marks','$dbms_marks','$dsa_marks','$operating_system_marks','$java_marks','$student_status')";

        $data = mysqli_query($conn,$query);
        if ($data) {
        echo "Marks Update Successfully Done By University Amdinistrative";
        } else {
        echo "Failed Please try again later";
        }
    }
?>



<!-- code for update in university_student -->
<?php


if (isset($_POST['update'])) {
    $student_roll_number        = $_POST['roll_number'];
    $maths_marks                = $_POST['maths'];
    $dbms_marks                 = $_POST['dbms'];
    $dsa_marks                  = $_POST['dsa'];
    $operating_system_marks     = $_POST['operating_system'];
    $java_marks                 = $_POST['java'];
    $student_status             = $_POST['student_status'];

    $query = "UPDATE university_student.bca_results SET maths = '$maths_marks', dbms = '$dbms_marks', dsa = '$dsa_marks', os = '$operating_system_marks', java = '$java_marks', results_status = '$student_status' WHERE roll_number = '$student_roll_number'";

    $data = mysqli_query($conn,$query);
    if ($data) {
        echo "Marks Has been Update Successfully";
    } else {
        echo "sorry not update";
    }
        
    }

?>