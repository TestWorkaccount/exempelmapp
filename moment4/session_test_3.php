<?php
  session_start();

  function minFunktion()
  {

  }
?>
<!doctype html>
<html> 
    <head>
        <title>session_test_3.php</title>
    </head>


    <body>
        <h1> session_test_3.php </h1>
        <?php
            if (isset($_SESSION["exist"])) {
                // remove all session variables
                session_unset();


                // destroy the session
                session_destroy();
                echo "Session är rensad och förstörd.<br>";
            }


            echo "<p>Hej! <br />ID-värdet på denna session: ".session_id()."</p>";
        ?>
        <a href="session_test_2.php" target="_blank">session_test_2.php</a>
    </body>
</html>
