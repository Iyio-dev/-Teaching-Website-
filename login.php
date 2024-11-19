<?php
    $run = true;
    session_start();
    include("db.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password) && !is_numeric($email)){
            $query = "select * from data where email = '$email'";
            $result = mysqli_query($con, $query);

            if ($result)
            {
                if ($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['password'] == $password)
                    {
                        echo "<script>alert('Login Sucessful. Welcome')</script>";
                        header("Location: dashboard.php");
                        die;
                    }
                }
            }
            echo "<script>alert('Wrong Username or password')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .form-container{
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-container form{
            width: 30%;
            height: 60%;
            background-color: rgb(207, 60, 60);
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 15px;
            padding: 30px;
            transition: .5s;
        }
        .form-container form:hover{
            box-shadow: 2px 2px 2px 2px #534949;
        }
        .form-container form h1{
            color: rgb(49, 49, 201);
            font-size: 30px;
        }
        .form-container form input{
            width: 100%;
            height: 40px;
            margin-top: 30px;
            margin-bottom: 30px;
            border: 0;
            outline: 0;
            padding-left: 15px;
            font-size: 15px;
            border-radius: 15px;
        }
        .form-container form .btn{
            background-color: rgb(49, 49, 201);
            transition: 1s;
            color: #fff;
        }
        .form-container form .btn:hover{
            background-color: #fff;
            color: var(--violet);
        }
    </style>
</head>
<body>
    <div class="form-container">
    <form method="POST">
        <h1>Login to your page</h1>
        <input type="email" placeholder="Enter Your Email Address" id="transform" name="email">
        <input type="password" placeholder="Enter a Password" id="transform" name="password">
        <input type="submit" value="Submit" class="btn">
        <p>If you don't have an account  <a href="signup.php">Sign Up</a></p>
    </form>
    </div>
</body>
</html>