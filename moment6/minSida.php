<?php
    require_once("funktionerExternFil.php");
    require_once("funktionerExternFil.php");
?>

<?php
    error_reporting(-1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("menuToInclude.php");
?>
<?php
    hej("Tjabba");
    hej(5, 6, 7, 10, "Hej");
    hej();
?>
<br>
<?php
    hej2("Åke");
?>
<br>
<?php
    $tal = 0;
    viktigFunktion($tal);
    echo $tal . "<br>";
    viktigFunktion($tal);
    echo $tal . "<br>";
    viktigFunktion($tal);
    echo $tal . "<br>";
    viktigFunktion($tal);
    echo $tal . "<br>";
    
?>
<br>
<?php
    $minLista = [2, 245, "nån sträng"];
    skrivUtLista($minLista);

    // skrivUtLista(5); //blir fel //kan inte köra foreach på ett heltal

?>
<br>
<br>
<?php
    skriverUtArgument(5, 1, 3); //3 argument
    skriverUtArgument("tjena", 4, 5.7, 0.5); //4
    skriverUtArgument();  //0
?>
<br>
<br>
<?php
    echo "Vi får det här: " . vilketReturVärde(0); //ingenting
    echo "<br>";
    echo "Vi får det här: " . vilketReturVärde("0"); //du är en nolla
    echo "<br>";
    echo "Vi får det här: " . vilketReturVärde(0.0);
    echo "<br>";
    echo "Vi får det här: " . vilketReturVärde(false);
    echo "<br>";
    echo 0;
    echo "<br>";
    echo false;
    echo "<br>";
    echo true;

    require("menuToInclude.php");
?>

</body>
</html>