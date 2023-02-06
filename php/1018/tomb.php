<?php

function Test()
{
    $php = array(); // ures tomb

    for($i=0; $i<10; $i++)
        $tomb[$i] = $i*2;

    $tomb2 = array("Bela", "Gizi", "Misi", "Icuka");

    for($i=0; $i<sizeof($tomb2); $i++)
        echo "<li>" . $tomb2[$i] . "</li>";
    echo "</ul>";

    echo "<br>";

    print_r($tomb);
}

?>