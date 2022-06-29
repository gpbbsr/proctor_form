<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Multi-step form</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./password_verify.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Sign Up For Proctor Form</h2>
                    <p>Fill all the required fields carefully to go to the next page. </p>
                    <form id="msform" action="index.php" method="POST">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Academics</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br>

                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Signup:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Regd. Number: *</label>
                                <input type="text" name="roll_no" placeholder="Registration Number" />

                                <label class="fieldlabels">Email: *</label>
                                <input type="email" name="email" placeholder="Email Id" />

                                <label class="fieldlabels">Username: *</label>
                                <input type="text" name="username" placeholder="UserName" />

                                <label class="fieldlabels">Password: *</label>
                                <input type="password" name="password" id="userPassword" placeholder="Password" />
                                <!-- password strength check field -->
                                <div>
                                    <ul class="validationList" style="list-style-position: inside;">
                                        <li id="length">Length - 8</li>
                                        <li id="upperCase">Upper-case</li>
                                        <li id="lowerCase">Lower-case</li>
                                        <li id=number>Number</li>
                                        <li id="specialCharacter">Special Character</li>
                                    </ul>
                                </div>

                                <label class="fieldlabels">Confirm Password: * <span id="confirm_pass_error"></span>
                                </label>
                                <input type="password" name="con_password" placeholder="Confirm Password" />

                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>

                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div>

                                <label class="fieldlabels">First Name: *</label>
                                <input type="text" name="fname" placeholder="First Name" />

                                <label class="fieldlabels">Last Name: *</label>
                                <input type="text" name="lname" placeholder="Last Name" />

                                <label class="fieldlabels">Contact No.: *</label>
                                <input type="text" name="phno" placeholder="Contact No." />

                                <label class="fieldlabels">Gender: *</label> <br>
                                <!-- gender male female and others -->
                                <input type="radio" class="gen" name="gender" id="" value="male"> Male
                                <br>
                                <input type="radio" class="gen" name="gender" id="" value="female"> Female
                                <br>
                                <input type="radio" class="gen" name="gender" id="" value="others"> Others
                                <br>
                                <label class="fieldlabels">Date of Birth: *</label>
                                <input type="date" name="dob" />

                                <label class="fieldlabels">Aadhar Number: *</label>
                                <input type="text" name="Aadhar_number" placeholder="Aadhar Number" />

                                <label class="fieldlabels">Catagory: *</label> <br>
                                <select name="catagory" id="">
                                    <option value="">Select Catagory</option>
                                    <option value="General">General</option>
                                    <option value="OBC">OBC</option>
                                    <option value="SC">SC</option>
                                    <option value="ST">ST</option>
                                </select> <br> <br>

                                <label class="fieldlabels">Blood group: *</label> <br>
                                <select name="blood_group" id="">
                                    <option value="">Select Blood Group</option>
                                    <option value="A +ve">A+</option>
                                    <option value="A -ve">A-</option>
                                    <option value="B +ve">B+</option>
                                    <option value="B -ve">B-</option>
                                    <option value="AB +ve">AB+</option>
                                    <option value="AB -ve">AB-</option>
                                    <option value="O +ve">O+</option>
                                    <option value="O -ve">O-</option>
                                </select>

                                <br>
                                <label class="fieldlabels">Living in hostel: *</label> <br>
                                <input type="radio" class="hostel gen" name="hostel" id="" value="Hostel"> Yes
                                <br>
                                <input type="radio" class="hostel gen" name="hostel" id="" value="Day Scholar"> No
                                <br>

                                <!-- present address -->
                                <label class="fieldlabels">Present Address: *</label>
                                <textarea name="present_address" id="" cols="30" rows="5"></textarea>
                                <br>
                                <label class="fieldlabels">Permanent Address: *</label>
                                <textarea name="permanent_address" id="" cols="30" rows="5"></textarea>
                                <br>
                                <label class="fieldlabels">Father's Name: *</label>
                                <input type="text" name="father_name" placeholder="Father's Name" />
                                <br>
                                <label class="fieldlabels">Father's Occupation: *</label>
                                <input type="text" name="father_occupation" placeholder="Father's Occupation" />
                                <br>
                                <label class="fieldlabels">Father's Contact No.: *</label>
                                <input type="text" name="father_contact" placeholder="Father's Contact No." />
                                <br>
                                <label class="fieldlabels">Mother's Name: *</label>
                                <input type="text" name="mother_name" placeholder="Mother's Name" />
                                <br>
                                <label class="fieldlabels">Mother's Occupation: *</label>
                                <input type="text" name="mother_occupation" placeholder="Mother's Occupation" />
                                <br>
                                <label class="fieldlabels">Mother's Contact No.: *</label>
                                <input type="text" name="mother_contact" placeholder="Mother's Contact No." />
                                <br>
                                <label class="fieldlabels">Name of the Scholarship Recieved: *</label>
                                <input type="text" name="scholarship_name" placeholder="Type no if not recieved" />

                                <!-- strength, weakness, extra curricular activities, Hobbey -->
                                <label class="fieldlabels">Your Strength: *</label>
                                <textarea name="strength" id="" cols="30" rows="3"></textarea>
                                <br>
                                <label class="fieldlabels">Your Weakness: *</label>
                                <textarea name="weakness" id="" cols="30" rows="3"></textarea>
                                <br>
                                <label class="fieldlabels">Your Hobbies: *</label>
                                <textarea name="hobbies" id="" cols="30" rows="3"></textarea>
                                <br>
                                <label class="fieldlabels">Your Extra Curricular Activities: *</label>
                                <textarea name="extra_curricular" id="" cols="30" rows="3"></textarea>
                                <br>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>
                                <!-- <label class="fieldlabels">Upload Your Photo:</label>
                                <input type="file" name="pic" accept="image/*">
                                <label class="fieldlabels">Upload Signature
                                    Photo:</label>
                                <input type="file" name="pic" accept="image/*"> -->
                                <label class="fieldlabels">HSC / 10<sup>th</sup>: *</label> <br>
                                <input type="file" name="hsc" id="hsc_image" accept="image/*" placeholder="image">

                                <input type="text" name="" id="" placeholder="Marks in percentage">
                                <input type="text" name="" id="" placeholder="Year of passing">

                                <!-- mark in 12th or ITI -->
                                <label class="fieldlabels">12th / ITI: *</label>
                                <input type="file" name="12th" accept="image/*" placeholder="image">
                                <input type="text" name="" id="" placeholder="Marks in percentage">
                                <input type="text" name="" id="" placeholder="Year of passing">

                                <!-- mark in Diploma 1-6th sem -->
                                <label class="fieldlabels">Diploma: *</label>
                                <input type="text" name="" id="" placeholder="1st sem in percentage">
                                <input type="text" name="" id="" placeholder="2nd sem in percentage">
                                <input type="text" name="" id="" placeholder="3rd sem in percentage">
                                <input type="text" name="" id="" placeholder="4th sem in percentage">
                                <input type="text" name="" id="" placeholder="5th sem in percentage">
                                <input type="text" name="" id="" placeholder="6th sem in percentage">


                            </div>
                            <input type="submit" name="submit" class="next action-button" value="submit" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="./password_validation.js"></script>
    <script src="./script.js"></script>

</body>

</html>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "proctor";


$conn = mysqli_connect($host, $username, $password, $database);

?>

<?php

// colect data from msform
if (isset($_POST['submit'])) {
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phno = $_POST['phno'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    echo "<h1>$dob</h1>";
    $query = "INSERT INTO `web`(`name`, `email`, `password`, `dob`, `phone`, `address`, `city`, `state`, `pincode`, `father_name`, `father_occupation`, `father_contact`, `mother_name`, `mother_occupation`, `mother_contact`, `scholarship_name`, `strength`, `weakness`, `hobbies`, `extra_curricular`, `hsc`) VALUES ('$roll_no', '$email', '$username', '$password', '$con_password', '$fname', '$lname', '$phno', '$dob', '', '', '', '', '', '', '', '', '', '', '', '')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<h1>Fuck you</h1>";
    } else {
        echo "<h1>Fuck not you</h1>";
    }
}


?>