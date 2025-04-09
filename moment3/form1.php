<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="länkUpp">Första elementet</p>
    <a href="#paragrafId">Länk till ID</a>
    <p>self är : <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?></p>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <p><label for="namnId">Name: </label>
        <input type="text" name="name" id="namnId"></p>
        <p><label for="emailId">E-mail: </label>
        <input type="text" name="email" id="emailId"></p>
        <input type="submit"><br>
        <input type="button" checked>
        <br>
        <input type="checkbox" checked>
        <br>
        <input type="radio" checked>


    </form>


    <?php 
              if ($_SERVER["REQUEST_METHOD"] == "GET") {
                echo "Your name is : " . htmlspecialchars($_GET["name"]) . "<br>" .
               "Your email address is: " . $_GET["email"]; 
              }
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p id="paragrafId">Paragraf här nere som är uppdaterad</p>
    <a href="#länkUpp">Länk upp till första elementet</a>

</body>
</html>