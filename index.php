<?php
include 'db.php';

if(!$conn) {
    echo "Error connecting the database";
}

if(isset($_POST['submit'])) {
    $search = $_POST['search_iteam'];
    $query = "SELECT * FROM `worksheet` WHERE A LIKE '%$search%' or B LIKE '%$search%' or C LIKE '%$search%' or D LIKE '%$search%' or E LIKE '%$search%' or F LIKE '%$search%' or G LIKE '%$search%' or H LIKE '%$search%' or I LIKE '%$search%' or J LIKE '%$search%' or K LIKE '%$search%' or L LIKE '%$search%' or M LIKE '%$search%' or N LIKE '%$search%' or O LIKE '%$search%' or P LIKE '%$search%' or Q LIKE '%$search%' or R LIKE '%$search%' or S LIKE '%$search%' or T LIKE '%$search%' or U LIKE '%$search%' or V LIKE '%$search%' or W LIKE '%$search%' or X LIKE '%$search%' or Y LIKE '%$search%' or Z LIKE '%$search%' or AA LIKE '%$search%' or AB LIKE '%$search%' or AC LIKE '%$search%' or AD LIKE '%$search%' or AE LIKE '%$search%' or AF LIKE '%$search%' or AG LIKE '%$search%' or AH LIKE '%$search%' or AI LIKE '%$search%' or AJ LIKE '%$search%' or AK LIKE '%$search%' or al LIKE '%$search%' or am LIKE '%$search%' or AN LIKE '%$search%'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    
    if($count == 0) {
        echo "No results found";
    } else {
        do {
            echo '<td>' . $row['A'] . '</td>';
            echo '<td>' . $row['B'] . '</td>';
        } while ($row = mysqli_fetch_array($result));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="head">
    <h2>STUDENT DETAILS FOR PROCTORIAL ACTIVITY</h2>
    <h5>DEPARTMENT OF INFORMATION TECHNOLOGY, GOVT.POLYTECHNIC, BHUBANESWAR,<br>SESSION: 2020-23</h5> <br>
</div> 
    <table class="personal_table">
        <tr>
            <td>Name of the Student : </td>
            <td>Father's Name : </td>
        </tr>
        <tr>
            <td>Registration No : </td>
            <td>Contact No : </td>
        </tr>
        <tr>
            <td>Gender : </td>
            <td>Mother's Name : </td>
        </tr>
        <tr>
            <td>Contact No : </td>
            <td>Contact No : </td>
        </tr>
        <tr>
            <td>Email ID : </td>
            <td>Parent's Occupation : </td>
        </tr>
        <tr>
            <td>Aadhaar No : </td>
            <td>Hosteller/Day Scholar : </td>
        </tr>
        <tr>
            <td>Catagory : </td>
            <td>D.O.B : </td>
        </tr>
        <tr>
            <td>Blood Group : </td>
            <td>Name of the Scholarship Received : </td>
        </tr>
        <tr>
            <td>Present Address : </td>
            <td>Permanent Address : </td>
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
            <td colspan="2"></td>
            <td></td>
        </tr>
        <tr>
            <td>12th</td>
            <td colspan="2"></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="7">Diploma</td>
            <td><b>Semester</b></td>
            <td><b>Percentage(%)</b></td>
            <td></td>
        </tr>
        <tr>
            <td>1st</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2nd</td>
            <td></td>
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
            <td>Strength : </td>
            <td>Weakness : </td>
        </tr>
        <tr>
            <td>Hobbey : </td>
            <td>Extracurricular Activities : </td>
        </tr>
    </table>
</body>
</html>