<?php
    session_start();
    echo "Från en annan fil";
?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Moment 1</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="myStyle/myCustom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="script/jqueryui.js"></script>
  <script src="script/myScript.js"></script> 
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="moment1.php" class="active w3-light-blue">Moment 1</a>
    <a href="moment2.php">Moment 2</a>
    <a href="moment3.php">Moment 3</a>
    <a href="moment4.php">Moment 4</a>
    <a href="moment5.php">Moment 5</a>
    <a href="moment6.php">Moment 6</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
