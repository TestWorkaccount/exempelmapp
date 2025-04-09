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