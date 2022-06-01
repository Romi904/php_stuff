<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Let's Go</title>
</head>

<body>
    <div id="modal">
        <div id="modal-con">
            <p id="p">Are You Sure ?</p>
            <small>Romijul laskar &copy;</small>
            <button id="Y">YES</button>
            <button id="N">NO</button>
        </div>
    </div>
    <div id="main">
        <div id="two">
            <span id="nname">
            <?php 
            // to excape from error 😂😁
            if($_SESSION['loggedin']==true)
            {
                echo $_SESSION['username'];
            }
            else{
                ?>
                <style>
                    #main #two #nname{
                        visibility: hidden;
                    }
                </style>
                <?php
            } ?>
            </span>
            <h1 id="hone">IT'S TIME TO ROCK 💣</h1> <!-- emoji shortcut ( win + > )-->
            <small>To Play Just Click on Below Canvas👇</small>
            <canvas id="draw">
                Your Browser doesn't support canvas.
            </canvas>
            <div id="loader"></div>
            <div class="fix">
                <button id="btnone" type="button">EXIT</button>
                <button id="btntwo" type="button">RESET</button>
                <button id="btnthree" type="button">COLOR</button>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="nscript.js"></script>
</html>