<?php

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Min tabell</title>
  <style>
    table, th, td
    {
      border: 1px solid;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "testake"; //Ditt $username
    $password = "1234"; //Ditt $password
    $dbname = "myDB";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);
    
    
    $conn->close();

    skrivUtTabell($result);

    function skrivUtTabell($result)
    {
        if ($result->num_rows > 0) {
            echo 
            "<table>
            <tr>
                <th>id</th>
                <th>Efternamn</th>
                <th>Namn</th>
            </tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
            echo 
            "<tr>
                <td> $row[id]</td>
                <td> $row[lastname] </td>
                <td> $row[firstname] </td>
            </tr>";
            }
            echo "</table>";
        } 
        else 
        {
            echo "0 results";
        }
    }
?>

  <p><b>Code lines to explain from the example above:</b></p>
  <p>First, we set up an SQL query that selects the id, 
    firstname and lastname columns from the MyGuests table. 
    The next line of code runs the query and puts the resulting data into a variable called $result.</p>
  <p>Then, the function num_rows() checks if there are more than zero rows returned.</p>
  <p>If there are more than zero rows returned, the function fetch_assoc() puts all the results 
    into an associative array that we can loop through. 
    The while() loop loops through the result set and outputs the data from the id, 
    firstname and lastname columns.</p>
</body>
</html>