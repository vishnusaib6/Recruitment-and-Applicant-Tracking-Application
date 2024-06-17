<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment and Applicant Tracking</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d3d6a9;
        }
        .container  {
            max-width: 850px;
            margin: 20px auto;
            background-color: black;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 20px;
        }
        input[type="email"],
        <hr>
         input[type="password"], 
         select {
            width: 50%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #6b6531;
            border-radius: 3px;
            box-sizing: border-box;
        }
       
        input[type="submit"] {
            background-color: #eef2ef;
            color: #773030;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #359679;
        }
        table {
            width: 60%;
            border-collapse: collapse;
        }
        th, td {
            padding: 6px;
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
         <h2>coapps login</h2>
        <form id="applicationForm">
           
            <label for="Email">Email</label>
            <input type="email" id="Email" name="Email" required>
            
            <label for="Password">Password</label>
            <input type="Password" id="Password" name="Password" required>

            <input type="submit" value="Submit">
        </form>
        <p>Not have an account?<a href="project @1.php">Sign up here</a></p>
</body>