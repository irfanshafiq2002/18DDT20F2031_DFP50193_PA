<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Putra Zoo Club Member Registration</title>
    <style>
        body{
            font-family: Arial, sans-serif;
        }

        .container{
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group{
            margin-bottom: 20px;
        }

        label{
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"]
        input[type="email"]
        input[type="password"]
        input[type="date"]
        select{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"]
        input[type="radio"]{
            margin-right: 5px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error message{
            color: red;
            font-weight: bold;
            margin-spot: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Registration Form Putra Zoo</h2>
    <form action="process_form.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="select">Select Type of Membership:</label>
            <select id="select" name="select">
            <option value="option1">Bronze</option>
            <option value="option1">Silver</option>
            <option value="option1">Gold</option>
        </div>
        <div class="form-group">
            <label for="genre">Age Requirement:</label>
            <input type="checkbox" id="checkbox1" name="checkbox[]" value="checkbox1">
            <label for="checkbox1">10 - 15</label>
            <input type="checkbox" id="checkbox2" name="checkbox[]" value="checkbox2">
            <label for="checkbox2">16 - 25</label>
            <input type="checkbox" id="checkbox3" name="checkbox[]" value="checkbox3">            
            <label for="checkbox3">26 - up</label>
        </div>
        <div class="form-group">
            <label>Age Name:</label>
            <input type="radio" id="radio1" name="Kids" value="option1">
            <label for="radio1">KIDS</label>
            <input type="radio" id="radio2" name="Teens" value="option2">
            <label for="radio2">TEENAGER</label>
            <input type="radio" id="radio3" name="Adult" value="option3">            
            <label for="radio3">ADULT</label>
        </div>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    </div>
</body>
</html>