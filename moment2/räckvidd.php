<!--A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:-->

<?php
    error_reporting(-1);
?>

<?php
echo "<h5><b>Variable with global scope:</b></h5>";
    $a = 5; // global scope

    function myTest1() 
    {
        global $a;
        // using x inside this function will generate an error
        echo "<p>Variable a inside function is: $a</p>";
    }
    
    myTest1();

    function myTest2()
    {
        $b = 10; // local scope
        echo "<p>Variable b inside function is: $b</p>";
    }

        
    myTest2();

    // using x outside the function will generate an error
    echo "<p>Variable b outside function is: $b</p>";

    echo "<br>";

    var_dump(5, 10, 15, 20, 25);

    myTest2(5, 7, "tjabba", "hallå");


    echo "<br><br><br>";

    echo strpos("Hello world!", "world");

    echo "<br>";
    echo str_replace("world", "Dolly", "Hello world!"); 

    echo "<br>";
    echo PHP_INT_MAX;
    echo "<br>";
    echo PHP_INT_MIN;
    echo "<br>";
    echo PHP_INT_SIZE;

    echo "<br>";
    
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = "1234as9dasd65.768";
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";
    echo "<br>";
    echo rand(10, 20);

?>
