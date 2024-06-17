<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $Surname = $_post['Surname']
        $First Name = $_post['First Name']
        $Second Name = $_post['Second Name']
        $Primary Email = $_post['Primary Email']
        $Secondary Email = $_post['Secondary Email']
        $Primary Contact Number = $_post['Primary Contact Number']
        $Secondary Contact Number = $_post['Secondary Contact Number']
        $10th % = $_post['10th %']
        $Inter/Diploma% = $_post['Inter/Diploma%']
        $B.Tech CGPA = $_post['B.Tech CGPA']
        $Qualification = $_post['Qualification']
        $Gender = $_post['Gender']
        $Date of Birth = $_post['Date of Birth']
        $Passed Out Year = $_post['Passed Out Year']
        $Any Certification = $_post['Any Certification']
        $Current City = $_post['Current City']
        $State = $_post['State']
        $Resume = $_post['Resume']
        $Email = $_post['Email']
        $Password = $_post['Password']

        if(!empty($Emai) && !empty($Password) && !is_numeric($Email))
        {
            $query = "insert into form (Surname, First Name, Second Name, Primary Email, Secondary Email, Primary Contact Number, Secondary Contact Number, 10th %, Inter/Diploma%, B.Tech CGPA,  Qualification, Gender, Date of Birth, Passed Out Year, Any Certification, Current City, State, Select Job, Resume, Email, Password ) values ('$Surname', '$First Name', '$Second Name', '$Primary Email', '$Secondary Email', '$Primary Contact Number', ' $Secondary Contact Number', '$10th %', '$Inter/Diploma%', '$B.Tech CGPA', '$Qualification', '$Gender', '$Date of Birth', '$Passed Out Year', '$Any Certification', '$Current City', '$State', '$Resume', '$Email', ' $Password' )"
            
            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter Some valid Information')</script>";
        }
      
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment and Applicant Tracking</title>
    <style>
        /* Basic CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 850px;
            margin: 20px auto;
            background-color: #d3d6a9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #eef2ef;
            color: #0a0a0a;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #f13232;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .apply-link {
            color: #c81313;
            text-decoration: none;
        }
        .apply-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
         <h0>COAPPS JOB HIRING</h0>
        <h1>Job Listings</h1>
        <table>
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Description</th>
                    <th>Package</th>
                    <th>Apply</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Python Full Stack Engineer</td>
                    <td>Seeking a Python Full Stack Engineer to develop scalable web applications and APIs.</td>
                    <td>4 LPA</td>
                    <td><a href="index.html" class="apply-link">Apply Now</a></td>

                </tr>
                <tr>
                    <td>Design Engineer</td>
                    <td>Seeking a Design Engineer to create and develop innovative product designs and specifications.</td>
                    <td>5 LPA</td>
                    <td><a href="index.html" class="apply-link">Apply Now</a></td>

                </tr>
                <tr>
                    <td>Data Entry</td>
                    <td>Looking for a Data Entry Specialist to accurately input and manage data in digital systems.</td>
                    <td>3 LPA</td>
                    <td><a href="index.html?job=Data%20Entry" class="apply-link">Apply Now</a></td>
                </tr>
            </tbody>
        </table>

        <h2>Apply for a Job</h2>
        <form id="applicationForm">
           
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" required>
            
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="secondname">Second Name</label>
            <input type="text" id="secondname" name="secondname" required>

            <label for="primaryEmail">Primary Email</label>
            <input type="email" id="primaryEmail" name="primaryEmail" required>

            <label for="secondaryEmail">Secondary Email</label>
            <input type="email" id="secondaryEmail" name="secondaryEmail">

            <label for="primaryContact">Primary Contact Number</label>
            <input type="text" id="primaryContact" name="primaryContact" required>

            <label for="secondaryContact">Secondary Contact Number</label>
            <input type="text" id="secondaryContact" name="secondaryContact">

            <label for="tenthPercent">10th %</label>
            <input type="text" id="tenthPercent" name="tenthPercent" required>

            <label for="interDiploma">Inter/Diploma%</label>
            <input type="text" id="interDiploma" name="interDiploma" required>

            <label for="btechCgpa">B.Tech CGPA</label>
            <input type="text" id="btechCgpa" name="btechCgpa" required>

            <label for="qualification">Qualification</label>
            <select id="qualification" name="qualification" required>
                <option value="">Select a Branch...</option>
                <option value="ECE">ECE</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
            </select>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="">Select a Gender...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>

            <label for="passedOutYear">Passed Out Year</label>
            <select id="passedOutYear" name="passedOutYear" required>
                <option value="">Select a Year...</option>
                <option value="2024">2024</option>
                <option value="2023">2023</option>
            </select>

            <label for="certification">Any Certification</label>
            <input type="text" id="certification" name="certification">

            <label for="currentCity">Current City</label>
            <input type="text" id="currentCity" name="currentCity" required>

            <label for="state">State</label>
            <input type="text" id="state" name="state" required>

            <label for="job">Select Job</label>
            <select id="job" name="job" required>
                <option value="">Select a job...</option>
                <option value="Python Full Stack Engineer">Python Full Stack Engineer</option>
                <option value="Design Engineer">Design Engineer</option>
                <option value="Data Entry">Data Entry</option>
            </select>
            
            <form id="resumeForm" enctype="multipart/form-data">
                <label for="resume">Select Resume</label>
                <hr>   
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            </select>
            <hr>
            SignUp
         <hr>
            <label for="Email">Email</label>
            <input type="email" id="Email" name="Email" required>
            
            <label for="Password">Password</label>
            <input type="text" id="Password" name="Password" required>
            <hr>
            <input type="submit" value="Submit">
        </form>
        <p>By clicking the sign up button, you agree to our<br>
            <a href="">Terms and conditions</a> and <a href="#">policy privacy</a>
            </p>
            <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>