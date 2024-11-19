<?php
include('db.php');

$query = "select * from data";
$result = mysqli_query($con, $query);

if ($result)
{
    if ($result && mysqli_num_rows($result) > 0)
    {
        $user_data = mysqli_fetch_assoc($result);

        $username = $user_data['name'];
        echo "<p>Welcome, $name</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        :root{
            --pink: rgb(207, 60, 60);
            --violet: rgb(49, 49, 201);
        }
        p{
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, 0%);
            background-color: var(--pink);
            width: 100%;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 30px;
        }
        .nav-container{
            width: 25vw;
            height: 100%;
            background-color: var(--pink);
            position: relative;
        }
        .nav-container ul li{
            list-style: none;
            height: 50px;
            width: 100%;
            background-color: var(--violet);
            margin-top: 20px;
            display: flex;
            align-items: flex-start;
            padding-left: 40px;
            align-items: center;
        }
        .nav-container ul li:first-child{
            margin-top: 0;
        }
        .nav-container ul li a{
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            font-weight: bolder;
            transition: .5s;
        }
        .nav-container ul li a:hover{
            color: var(--pink);
        }
    </style>
</head>
<body>
    <div class="nav-container">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">Exams</a></li>
        </ul>
    </div>
    <div class="container">
        
    </div>
</body>
</html>