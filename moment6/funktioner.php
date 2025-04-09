<?php
    function hej()
    {
        echo "Hej från funktion";
    }

    function hej2($text)
    {
        echo "Hej $text"; 
    }

    function viktigFunktion(&$orginalet)
    {
        $orginalet += 5;
    }

    function skrivUtLista($lista)
    {
        echo "Nu skrivs listan ut<br>";
        foreach($lista as $värde)
        {
            echo $värde . "<br>";
        }
    }

    function skriverUtArgument()
    {
        $antalArgument = func_num_args();
        echo "Antal inparametrar $antalArgument<br>";
        $argumentLista = func_get_args();
        for($i = 0; $i < $antalArgument; $i++)
        {
            echo "$i argument var: $argumentLista[$i]<br>";
        }
    }

    function vilketReturVärde($argument)
    {
        if($argument === 0)
        {
            return;
        }
        if($argument === false)
        {
            return "Det var falskt";
        }
        if($argument === 0.0)
        {
            return "Det var ett flyttal";
        }
        if($argument === "hej")
        {
            return "Tjabba";
        }
        if($argument === "0")
        {
            return "Du är en nolla!";
        }
        if($argument === 5)
        {
            return $argument * 10;
        }
    }
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
?>
</body>
</html>