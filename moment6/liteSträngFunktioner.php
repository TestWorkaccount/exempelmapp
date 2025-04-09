<?php 
        // strlen  ger antal tecken i en text
        echo strlen("Markus")."<br>"; 
        // strtoupper omvandlar textsträngen till stora bokstäver (versaler)
        echo strtoupper("Markus")."<br>";
    //     // strtolower omvandlar textsträngen till små bokstäver (gemener)
        echo strtolower("MARKUS")."<br>";
    //     //strpos en delsträngs position i en sträng obs. börjar räkna på 0
        echo strpos("Markus", "k")."<br>";
    //     // str_replace byter ut en delsträng mot en annan
        // str_replace("byts ut", "byts till", "hela strängen");
        echo str_replace("world", "Markus", "Hello world")."<br>";
    //    // ucfirst() omvandlar första bokstaven till stora bokstav 
    //     // obs åäö påverkas inte 
         $text = "åke";
         echo ucfirst( $text )."<br>";
    //   // substr() tar ut en del sträng 
    //   // substr(texten, start [börjar på 1:a bokstaven], antal tecken)
        $text = "Bra dag";
         $nyText = substr( $text, 1 );
         echo $nyText;
?>

<div style="color: blue;">
<?php


$text = "25/2 skickades ut kallelser från admin.stockholm@astar.se för kursstart 15/3 Kallelsen är skickad till den mailadress du angav vid ansökan. Det kan hända att kallelsen hamnar bland skräpposten – så ta en extra titt där!";


//wordwrap delar upp lång text på rader
// word wrap( text, antal bokstäver per rad, "<br />\n")
$nyText = wordwrap($text, 15, "<br>\n", true);
echo $nyText;
?>
</div>

<?php


$text = "25/2 skickades ut kallelser från admin.stockholm@astar.se för kursstart 15/3 Kallelsen är skickad till den mailadress du angav vid ansökan. Det kan hända att kallelsen hamnar bland skräpposten – så ta en extra titt där!";


// explode() bryter en text vid vissa tecken t.ex vid mellanslag och lägger delarna i en array
$ordArray = explode(" ", $text); // orden placeras i en array
foreach($ordArray as $value)
{
	echo $value . "<br>";
}
?>

<p style="color: blue;">
<?php
// en array av strängar 
    
    $ord[0] = "noll";
    $ord[1] = "ett";
    $ord[2] = "två";
    $ord[3] = "tre";


    // implode() omvandlar en array till en text
    // implode( sträng mellan delarna, arrayen)
    $text = implode("-", $ord);
    echo $text;


?>
</p>
