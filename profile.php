<?php
include 'db.php';

if (!$conn) {
    echo "Error connecting the database";
}
session_start();

$name = $_GET['key'];
$query = "SELECT * FROM P1819 WHERE `COL 1` = '$name'";
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
        <h5>DEPARTMENT OF INFORMATION TECHNOLOGY, GOVT.POLYTECHNIC, BHUBANESWAR,<br>SESSION: 2020-23</h5> <br>
    </div>
    <table class="personal_table">
        <tr>
            <td>Name of the Student : <?php  echo $row['COL 3'];?></td>
            <td>Father's Name : <?php  echo $row['COL 12'];?></td>
        </tr>
        <tr>
            <td>Registration No : <?php  echo $row['COL 4'];?></td>
            <td>Contact No : <?php  echo $row['COL 13'];?></td>
        </tr>
        <tr>
            <td>Gender : <?php  echo $row['COL 5'];?></td>
            <td>Mother's Name : <?php  echo $row['COL 14'];?></td>
        </tr>
        <tr>
            <td>Contact No : <?php  echo $row['COL 6'];?></td>
            <td>Contact No : <?php  echo $row['COL 15'];?></td>
        </tr>
        <tr>
            <td>Email ID : <?php  echo $row['COL 2'];?></td>
            <td>Parent's Occupation : <?php  echo $row['COL 16'];?></td>
        </tr>
        <tr>
            <td>Aadhaar No : <?php  echo $row['COL 7'];?></td>
            <td><?php  echo $row['COL 17'];?></td>
        </tr>
        <tr>
            <td>Catagory : <?php  echo $row['COL 8'];?></td>
            <td>D.O.B : <?php  echo $row['COL 18'];?></td>
        </tr>
        <tr>
            <td>Blood Group : <?php  echo $row['COL 9'];?></td>
            <td>Name of the Scholarship Received : <?php  echo $row['COL 19'];?></td>
        </tr>
        <tr>
            <td>Present Address : <?php  echo $row['COL 10'];?></td>
            <td>Permanent Address : <?php  echo $row['COL 11'];?></td>
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
            <td colspan="2"><?php  echo $row['COL 20'];?></td>
            <td><?php  echo $row['COL 21'];?></td>
        </tr>
        <tr>
            <td>12th</td>
            <td colspan="2"><?php  echo $row['COL 22'];?></td>
            <td><?php  echo $row['COL 23'];?></td>
        </tr>
        <tr>
            <td rowspan="7">Diploma</td>
            <td><b>Semester</b></td>
            <td><b>Percentage(%)</b></td>
            <td></td>
        </tr>
        <tr>
            <td>1st</td>
            <td>HH<?php  echo $row['COL 24'];?></td>
            <td></td>
        </tr>
        <tr>
            <td>2nd</td>
            <td><?php  echo $row['COL 25'];?></td>
            <td></td>
        </tr>
        <tr>
            <td>3rd</td>
            <td><?php  echo $row['COL 26'];?></td>
            <td></td>
        </tr>
        <tr>
            <td>4th</td>
            <td><?php  echo $row['COL 27'];?></td>
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
            <td><?php  echo $row['COL 28'];?></td>
            <td>Library Resistration</td>
            <td><?php  echo $row['COL 32'];?></td>
        </tr>
        <tr>
            <td>Skill Odisha</td>
            <td><?php  echo $row['COL 29'];?></td>
            <td>NATS PORTAL</td>
            <td><?php  echo $row['COL 33'];?></td>
        </tr>
        <tr>
            <td>Swayam,MOOCs</td>
            <td><?php  echo $row['COL 30'];?></td>
            <td>NCS</td>
            <td><?php  echo $row['COL 34'];?></td>
        </tr>
        <tr>
            <td>Anti-Ragging By Student in</td>
            <td><?php  echo $row['COL 31'];?></td>
            <td>CISCO</td>
            <td><?php  echo $row['COL 35'];?></td>
        </tr>
        <tr>
            <td>AICTE PORTAL INTERNSHALA</td>
            <td><?php  echo $row['COL 37'];?></td>
            <td>IT ESSENTIAL</td>
            <td><?php  echo $row['COL 36'];?></td>
        </tr>
    </table> <br> <br>



    <table class="extra_activity">

        <tr>
            <td>Strength : <?php  echo $row['COL 39'];?></td>
            <td>Weakness : <?php  echo $row['COL 40'];?></td>
        </tr>
        <tr>
            <td>Hobbey : <?php  echo $row['COL 38'];?> </td>
            <td>Extracurricular Activities : <?php  echo $row['COL 41'];?></td>
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