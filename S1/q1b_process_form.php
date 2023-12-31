<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    $genre = isset($_POST["genre"]? $_POST["genre"] : array())
    $radio = $_POST["radio"];

    $error = array();

    if(empty($password) < 6){
        $error[] = "All fields are required.";
    }

    if(strlen($password) < 0){
        $error[] = "Password must be at least 6 characters long.";
    }

    if(count($password) < 0) {
        $_SESSION["errors"] = $error;
        header("Location: registration.php");
        exit();
    }

    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["date"] = $date;
    $_SESSION["genre"] = $genre;
    $_SESSION["radio"] = $radio;

    header("Location: q1c_display_data.php");
    exit();
}
?>