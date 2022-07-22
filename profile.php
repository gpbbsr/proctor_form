<?php
include 'db.php';

if (!$conn) {
    echo "Error connecting the database";
}
session_start();

$name = $_GET['key'];
$query = "SELECT * FROM student_details WHERE `id` = '$name'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document 1</title>
</head>

<body>
    <!-- not required search field here will be added back button -->
    <!-- <div class="search">
        <form action="index.php" method="post">
            <input type="text" name="search_iteam" placeholder="Search">
            <input type="submit" name="submit" value="Search">
        </form>
    </div> -->
    <div class="head">
        <h2>STUDENT DETAILS FOR PROCTORIAL ACTIVITY</h2>
        <h5>DEPARTMENT OF INFORMATION TECHNOLOGY, GOVT.POLYTECHNIC, BHUBANESWAR,<br>SESSION: 20 &nbsp; &nbsp; -&nbsp; &nbsp; </h5> <br>
    </div>
    <table class="personal_table">
        <tr>
            <td>Name of the Student : <?php  echo $row['first_name'].$row['last_name'];?></td>
            <td>Father's Name : <?php  echo $row['father_name'];?></td>
        </tr>
        <tr>
            <td>Registration No : <?php  echo $row['regd_no'];?></td>
            <td>Contact No : <?php  echo $row['father_contact'];?></td>
        </tr>
        <tr>
            <td>Gender : <?php  echo $row['gender'];?></td>
            <td>Mother's Name : <?php  echo $row['mother_name'];?></td>
        </tr>
        <tr>
            <td>Contact No : <?php  echo $row['contact_call'];?></td>
            <td>Contact No : <?php  echo $row['mother_contact'];?></td>
        </tr>
        <tr>
            <td>Email ID : <?php  echo $row['email'];?></td>
            <td>Parent's Occupation : <?php  echo $row['father_job'].$row['mother_job'];?></td>
        </tr>
        <tr>
            <td>Aadhaar No : <?php  echo $row['aadhaar_number'];?></td>
            <td><?php  echo $row['hostel'];?></td>
        </tr>
        <tr>
            <td>Catagory : <?php  echo $row['people_category'];?></td>
            <td>D.O.B : <?php  echo $row['dob'];?></td>
        </tr>
        <tr>
            <td>Blood Group : <?php  echo $row['blood_group'];?></td>
            <td>Name of the Scholarship Received : <?php  echo $row['scholarship'];?></td>
        </tr>
        <tr>
            <td>Present Address : <?php  echo $row['present_address'];?></td>
            <td>Permanent Address : <?php  echo $row['permanent_address'];?></td>
        </tr>
    </table> <br> <br>



    <table class="academics_table">
        <h3>Academic Details</h3>
        <tr>
            <td><b>COURSE</b></td>
            <td colspan="2"><b>Marks Obtained(%)</b></td>
            <!-- <td></td> -->
            <td><b>Year of Passing</b></td>
        </tr>
        <tr>
            <td>10th</td>
            <td colspan="2"><?php  echo $row['hsc_mark'];?></td>
            <td><?php  echo $row['year_of_pass_hsc'];?></td>
        </tr>
        <tr>
            <td>12th</td>
            <td colspan="2"><?php  echo $row['col_iti_mark'];?></td>
            <td><?php  echo $row['year_of_pass_col_iti'];?></td>
        </tr>
        <tr>
            <td rowspan="7">Diploma</td>
            <td><b>Semester</b></td>
            <td><b>Percentage(%)</b></td>
            <td></td>
        </tr>
        <tr>
            <td>1st</td>
            <td><?php  echo $row['d1'];?></td>
            <td></td>
        </tr>
        <tr>
            <td>2nd</td>
            <td><?php  echo $row['d2'];?></td>
            <td></td>
        </tr>
        <tr>
            <td>3rd</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4th</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5th</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6th</td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <table class="portal_table">
        <h3>Online Resistration in the Following Portal</h3> <br>
        <tr>
            <td>Digi Locker</td>
            <td>Yes</td>
            <td>Library Resistration</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Skill Odisha</td>
            <td>Yes</td>
            <td>NATS PORTAL</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Swayam,MOOCs</td>
            <td>Yes</td>
            <td>NCS</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Anti-Ragging By Student in</td>
            <td>Yes</td>
            <td>CISCO</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>AICTE PORTAL INTERNSHALA</td>
            <td>Yes</td>
            <td>IT ESSENTIAL</td>
            <td>Yes</td>
        </tr>
    </table> <br> <br>



    <table class="extra_activity">

        <tr>
            <td>Strength : <?php  echo $row['strength'];?></td>
            <td>Weakness : <?php  echo $row['weakness'];?></td>
        </tr>
        <tr>
            <td>Hobbey : <?php  echo $row['hobbies'];?> </td>
            <td>Extracurricular Activities : <?php  echo $row['extra_curricular_activities'];?></td>
        </tr>
    </table>
    <?php

}
} else {
    echo "0 results";
}
?>
</body>

</html>