<?php

    for($i = 1; $i <= 100; $i+=2){
        // echo "$i är ett udda tal <br>";
    }

    for($i = 0; $i <= 100; $i++){
        if(!($i % 2 == 0))
        {
            // echo "$i är ett udda tal <br>";
        }
    }

    //skriv ut alla tal som är jämnt delbara med 4
    for($i = 0; $i <= 100; $i++){
        if($i % 4 == 0)
        {
            echo "$i är jämnt delbart med 4<br>";
        }
    }

    for($i = 0; $i <= 100; $i+=4){

        echo "$i är jämnt delbart med 4<br>";
    
    }

?>