<?php
if(isset($_POST['submit'])){
    include 'connection.php';
    $email=  $_POST["email"];
    $password=$_POST['password'];

    $sql = "SELECT * FROM USERS WHERE EMAIL = '$email' AND PASSWORD = '$password'";
    $result = mysqli_query($con, $sql);    
    $num = mysqli_num_rows($result);
    if($num==1){
        session_start();
        $_SESSION['username']=$email;
        header("location:dashboard.php");
    }
    else{
        echo "<script>alert('NOT Registered');</script>";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 2%;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Log In</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Log In">
        </form>
        <br>
        <a href="signup.php"><input type="submit" class="btn btn-primary" value="Sign Up"></a>

    </div>
</body>
</html>
