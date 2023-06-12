<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memeber's Data</title>

    <style>
        body{
            font-family: Arial, sans serif;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        th, td{
            border: 1px solid #ccc;
            padding: 0px;
        }

        th{
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Membership Data</h2>
    
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo isset($_SESSION["name"] ? $_SESSION["name"] : "" ?></td>
        </tr>    
    
        <tr>
            <th>Email</th>
            <td><?php echo isset($_SESSION["email"] ? $_SESSION["email"] : "" ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo isset($_SESSION["password"] ? $_SESSION["password"] : "" ?></td>
        </tr>
        <tr>
            <th>Date</th>
            <td><?php echo isset($_SESSION["date"] ? $_SESSION["date"] : "" ?></td>
        </tr>
        <tr>
            <th>Age Requirement</th>
            <td><?php echo isset($_SESSION["genre"] ? $_SESSION["genre"] : "" ?></td>
        </tr>
        <tr>
            <th>Age Name</th>
            <td><?php echo isset($_SESSION["radio"] ? $_SESSION["radio"] : "" ?></td>
        </tr>
    </table>
    <p><a href="registration.php">Go back to the Registration Form</a></p>
</body>
</html>