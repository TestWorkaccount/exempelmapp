<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skottår</title>
</head>
<body>
    
    <?php

        for($årtal = 2000; $årtal <= 2100; $årtal++)
        {
            if( $årtal % 4 == 0) //om $årtal är jämnt delbart med 4
            {

            }
            else
            {
                echo "$årtal Det var inte ett skottår";
            }
            echo "<br>";
        }
    ?>

</body>
</html>