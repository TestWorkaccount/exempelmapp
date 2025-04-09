<?php
  require_once("initieraSession.php");
?>
<!doctype html>
<html>
    <head>
        <title>session_test_2</title>
    </head>


    <body>
        <h1> session_test_2.php</h1>
        <?php 
        // Echo session variables that were set on previous page
        if (isset($_SESSION["favcolor"]))
             echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        if (isset($_SESSION["favanimal"])) 
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        echo "<p>Hej! <br />ID-värdet på denna session: ".session_id()."</p>";
        ?>
        <br><a href="session_test_3.php" target="_blank">session_test_3.php</a>
    </body>
</html>