<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body><style>
    
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f1f1f1;
    }
    
    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .form {
        max-width: 300px;
        margin: 0 auto;
    }
    
    .form h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    .form button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .form button:hover {
        background-color: #0056b3;
    }
    
    .form p {
        margin-top: 15px;
        text-align: center;
    }
    
    .form a {
        color: #007bff;
        text-decoration: none;
    }
    
    .form a:hover {
        text-decoration: underline;
    }
    </style>
    <div class="container">
        <form class="form" method="post" action="sign_up.php">
            <h2>Sign Up</h2>
            <input type="text" placeholder="Username" required name="user">
            <input type="email" placeholder="Email" required name="email">
            <input type="password" placeholder="Password" required name="pass">
            <input type="submit" name="submit" value="Sign Up" class="btn-primary">
            <p>Already have an account? <a href="Sign_in.php">Sign In</a></p>
        </form>
    </div>

    <?php

if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="INSERT INTO user_regi (username, email, password) values('$user','$email','$pass');";
    $conn->query($sql);
    header('location:sign_in.php');
}

?>
</body>
</html>
