
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variabel</title>
</head>
<body>
<?php
    $txt = "Åke"; //Declaration
    echo "I love $txt!"; //Output
?>

<?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>"; //Includes HTML markup
    echo "I'm about to learn PHP!<br>"; //Includes HTML markup
    echo "This ", "string ", "was ", "made ", "with multiple parameters."; //Multiple parameters separated by comma
?>

<?php
    $txt1 = "Learn PHP";
    $txt2 = "Astar.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>"; //Separated by period
    echo "Study PHP at " . $txt2 . "<br>";//Mix of string and variables
    echo $x + $y;//Mix variables and operand
?>

</body>
</html>