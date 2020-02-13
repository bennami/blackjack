<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
include 'game.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black Jack</title>
</head>
<body>
<form  method="post">
    <h1> Black Jack</h1>

    <div class="PlayerGame">
        <p>player</p>
        <div class="card"><?php  echo $score; ?></div>
        <div class="card"><?php  echo $score; ?></div>
        <button type='submit' name="hit" value="1" >HIT</button>
        <button type='submit' name="stand" value="2">STAND</button>
        <button type='submit' name="surrender" value="3">SURRENDER</button>
    </div>

    <div class="PlayerGame">
        <p>Dealer</p>
        <div class="card"><?php  $dscore; ?></div>
        <div class="card"><?php  $dscore; ?></div>
        <div class="DealerCard"></div>
    </div>
</form>
    <!--button to initate game-->
    <form action=" " method="get">
        <button type="submit" value="4" name="start">start game</button>
    </form>
</body>
</html>

