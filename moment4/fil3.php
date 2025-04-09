<?php

    session_start();
    // $_SESSION = Null; // Tar bort alla sessionsvariabler
    session_unset();
    session_destroy(); // Avslutar sessionen
    echo $_SESSION['namn']; // Get en warning/error


?>