<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/338cfc2edf.js" crossorigin="anonymous"></script>
    <title>Roll The Dice</title>
    <!-- <script src="https://kit.fontawesome.com/1825bd9b94.js" crossorigin="anonymous"></script> -->
</head>

<body>
    <div id="main">
        <div id="two">
        <p>Login Window</p>
            <form id="form" action="" method="post">
                <i class="fa-solid fa-person-circle-plus rest"></i>
                <label class="lab" for="nameee">Enter unique Id</label>
                <input id="nameee" class="iclas" type="text" name="ide" placeholder="ex: 52" required>
                <input id="cbutton" type="submit" name="submit" value="login">
            </form>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="nscript.js"></script>
</html>
<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $id=$_POST['ide'];

    $que="SELECT * FROM `game_app` WHERE `sl.no`='$id'";
    $ge=mysqli_query($con,$que);
    $opo=mysqli_fetch_assoc($ge);
    if($opo)
    {
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$opo['name'];
        header("location: new.php");
    }
}

?>