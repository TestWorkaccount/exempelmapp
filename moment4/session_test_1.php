<?php
  session_start();
?>

<html>
<head>
<title>session_test_1</title>
</head>


<body>
<h1> session_test_1.php</h1>
<?php 
    // Set session variables
    $_SESSION["exist"] = "true";
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    echo "<p>Hej! <br />ID-värdet på denna session: ".session_id()."</p>";
?>
<a href="session_test_2.php" target="_blank">session_test_2.php</a>
</body>
</html>