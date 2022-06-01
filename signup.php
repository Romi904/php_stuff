<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/338cfc2edf.js" crossorigin="anonymous"></script>
    <title>Roll The Dice</title>
</head>

<body>
    <div id="main">
        <div id="two">
            <p>Sign Up Window</p>
            <form id="form" action="" method="post">
                <i class="fa-solid fa-person-circle-plus rest"></i>
                <label class="lab" for="nameee">Enter Name</label>
                <input id="nameee" class="iclas" type="text" name="name" placeholder="Enter Name" required>
                <i class="fa-solid fa-at rest"></i>
                <label class="lab" for="mail">Enter E-Mail</label>
                <input id="mail" class="iclas" type="email" name="email" placeholder="Enter Email" required>
                <i class="fa-solid fa-key rest"></i>
                <label class="lab1" for="pps">Enter Password</label>
                <input id="pps" class="iclas" type="password" name="password" placeholder="Enter Password" required>
                <i class="fa-solid fa-key rest"></i>
                <label class="lab2" for="pas">Confirm Password</label>
                <input id="pas" class="iclas" type="password" name="cpassword" placeholder="Confirm Password" required>
                <input id="cbutton" type="submit" name="submit" value="create">
            </form>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="nscript.js"></script>
</html>
<?php 

include 'connection.php';

if(isset($_POST['submit'])) //when user click on submit button then only it is activate.
{
    $name=$_POST['name'];   // creating variable to access/connect database with it
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];

    $insertQuery = "insert into game_app(name,email,password,confirm) values('$name','$email','$pass','$cpass')";


    //checking username is not present in database
    $duplicate=true;
    $try="SELECT * FROM `game_app` WHERE name='$name' AND email='$email'";
    $tryagain=mysqli_query($con,$try);
    $duplicate=mysqli_num_rows($tryagain);
    if($duplicate==0){
        $duplicate=false;
    }


    if(($pass==$cpass) && $duplicate==false)
    {
        $res=mysqli_query($con,$insertQuery); //to connect with database and entry
    if($res){
        ?>
        <script>
            alert('Account Created Successful');
            </script>
            // window.location='index.php';
        <?php

        //accessing and showing unique id
        $r="SELECT * from `game_app` where email='$email'";
        $tt=mysqli_query($con,$r);
        $x=mysqli_fetch_assoc($tt);
        $message=$x['sl.no'];
        echo "<script>alert('Your Id number is $message');</script>";
        ?>
        <script>
            window.location='index.php';
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('You did some mistake');
        </script>
        <?php
    }
    }
    else{
        if($pass!=$cpass){
            ?><script>alert('Password Not Matched !');</script><?php
        }
        else if($duplicate==true){
            ?><script>alert('User Id Already Present !');</script><?php
        }
        else{
            echo "good";
        }
    }

    //fetching particular data
    $sql="SELECT * FROM `game_app`";
    $chc=mysqli_query($con,$sql);
    // $uyt=mysqli_fetch_assoc($chc);
    // echo var_dump($uyt);

    //another way to fetch data
    // while($uyt=mysqli_fetch_assoc($chc))
    // {
    //     echo $uyt['sl.no']." ".$uyt['name']." ".$uyt['email']." ".$uyt['confirm'];
    //     echo"<br>";
    // }
    
    $con->close();
}
?>
