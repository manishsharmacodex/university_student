<?php
    include("../server/connection.php");
?>

<!-- code for search record for University Student results -->
<?php

    if(isset($_POST['submit'])){
        $roll_number            = $_POST['roll_number'];
        // $student_name           = $_POST['student_name'];
        // $student_department     = $_POST['student_department'];

        $query = "SELECT * FROM university_student.student_result WHERE student_roll_number = '$roll_number'";

        $data = mysqli_query($conn,$query);
        $result = mysqli_fetch_assoc($data);
        // $name = $result['student_name'];
        // echo $name;


        // $s_no = 1;
        $result_query = "SELECT * FROM university_student.bca_results WHERE roll_number = '$roll_number'";

        $result_data = mysqli_query($conn,$result_query);
        $bca_result = mysqli_fetch_assoc($result_data);
        // $s_number = $bca_result['java'];
        // echo $s_number;
    }
?>



<!-- code for web page structure -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA Results Check - 2025</title>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="../font.css">
</head>
<body>
<!-- <div class="navigation-bar">
        <img src="./src/logo.png" alt="logo" class="logo">
        <ul>
            <a href="./index.php"><li>Home</li></a>
            <a href="#"><li>School</li></a>
            <a href="./results_check/index.php"><li>Exam & Result</li></a>
            <a href="#"><li>Contact Us</li></a>
            <a href="#"><li>Our Blog</li></a>
        </ul>
        <div class="nav-btn">
            <button class="login-btn"><a href="">Student Login</a></button>
            <button class="emp-login-btn"><a href="./admin/admin_login.php" target="next_page">Employee Login</a></button>
        </div>
    </div> -->
    <h1 class="home-title">Sushant University - 2025 Year Results</h1>
    <div class="container">
        <div class="left-box">
            <form action="#" method="POST" class="form">
                <h1 class="form-title">Student Details</h1>
                <div class="input-box">
                    <label class="input-label">Roll Number</label>
                    <input type="text" name="roll_number" placeholder="Enter Your Roll Number" class="input-field" value="<?php
                        if (isset($_POST['submit'])) {
                            echo $bca_result['roll_number'];
                        }
                    ?>">
                </div>

                <div class="input-box">
                    <label class="input-label">Student Name</label>
                    <input type="text" name="student_name" placeholder="Enter Your Name" class="input-field" value="<?php
                        if (isset($_POST['submit'])) {
                            echo $result['student_name'];
                        }
                    ?>">
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
                    <input type="submit" name="submit" value="SUBMIT" class="search-btn">
                </div>

                <div class="form-desc">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem iusto impedit, possimus ratione incidunt necessitatibus reiciendis labore sit. Veniam sequi voluptate aut consequatur nam illo, ad quo quas unde a! Libero adipisci ut quaerat officia odit ratione maiores, in, aliquam corporis expedita nemo.</p>
                </div>

                <div class="form-copy">
                    <p>2025 &copy; Sushant University All Rights Reserved</p>
                </div>
            </form>
        </div>

        <div class="right-box">
            <h1 class="right-box-form-title">Student Results</h1>
            <table>
                <tr>
                    <th>Student Name</th>
                    <th>Roll Number</th>
                    <th>Department</th>
                </tr>

                <tr>
                    <td class="middle"><?php
                        if (isset($_POST['submit'])) {
                            echo $result['student_name'];
                        }
                    ?></td>

                    <td class="middle">
                    <?php
                        if (isset($_POST['submit'])) {
                            echo $result['student_roll_number'];
                        }
                    ?>
                    </td>

                    <td class="middle">
                    <?php
                        if (isset($_POST['submit'])) {
                            echo $result['student_department'];
                        }
                    ?>
                    </td>
                </tr>
            </table>


            <h1 class="result-title">RESULTS</h1>

            <!-- result print -->
             <table class="second-table">
             <tr>
                    <th colspan="6">BCA II Year Subject</th>
                </tr>


                <tr>
                    <th>S.No</th>
                    <th>Maths</th>
                    <th>DBMS</th>
                    <th>DSA</th>
                    <th>Operating System</th>
                    <th>Java</th>
                </tr>

                <tr>
                    <td class="middle"><?php
                        if (isset($_POST['submit'])) {
                            echo $bca_result['s_no'];
                        }
                    ?></td>

                    <td class="middle"><?php
                        if (isset($_POST['submit'])) {
                            echo $bca_result['maths'];
                        }
                    ?></td>

                    <td class="middle"><?php
                        if (isset($_POST['submit'])) {
                            echo $bca_result['dbms'];
                        }
                    ?></td>

                    <td class="middle"><?php
                        if (isset($_POST['submit'])) {
                            echo $bca_result['dsa'];
                        }
                    ?></td>

                    <td class="middle"><?php
                        if (isset($_POST['submit'])) {
                            echo $bca_result['os'];
                        }
                    ?></td>

                    <td class="middle"><?php
                        if (isset($_POST['submit'])) {
                            echo $bca_result['java'];
                        }
                    ?></td>
                </tr>
             </table>

             <p class="message">RESULTS : <span class="status">
             <?php
                 if (isset($_POST['submit'])) {
                    $result_status = $bca_result['results_status'];
                    $result_color = ($result_status == 'Fail') ? 'red' : 'green';
                    $result_color = ($result_status == 'UFM') ? 'orange' : 'green';
                    echo "<span style='color: $result_color;'>$result_status</span>";
                }
             ?>
             </span></p>
        </div>
    </div>


    <!-- code for javascript -->
    <script type="text/JavaScript" src="./js/script.js"></script>
</body>
</html>