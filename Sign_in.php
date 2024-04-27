<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
    
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
        <form class="form" method="post" action="">
            <h2>Sign In</h2>
            <input type="email" placeholder="Email" required name="email">
            <input type="password" placeholder="Password" required name="pass">
            <input type="submit" value="Sign In" name="submit">
            <p>New user? <a href="Sign_up.php">Sign Up</a></p>
        </form>
    </div>
    <?php
// Check if email and password are set
if(isset($_POST['email']) && isset($_POST['pass'])) {
    // Simulate database check (replace with actual database query)
   $_SESSION['u_em']="";
    // Get user input
    $inputEmail = $_POST['email'];
    $inputPassword = $_POST['pass'];
      // Fetch user credentials from the database
      $sql = "SELECT * FROM user_regi WHERE email = '$inputEmail'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          // User found, check password
          $row = $result->fetch_assoc();
          
          

          if($inputEmail==$row['email'] && $inputPassword==$row['password']) {
              $_SESSION['u_em']=$row['email'];
              echo "you loged in";  
              $row['email'];
         header('location:index.php');
          } else {
             
            echo "not login";
          }
      } else {
       
        echo "not login";
      }
  } 
  
?>

</body>
</html>
