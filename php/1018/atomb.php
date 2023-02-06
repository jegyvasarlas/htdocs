<?php
// Asszociativ tomb
// valami => ertek, pl string => ertek
// kulcs => ertek

function ATomb()
{
    $autok = array("Toyota Corolla" => 10, 
                "Ford Focus" => 4,
                "Dacia Duster" => 7,
                "Subaru Impreza" => 23);

    foreach($autok as $kulcs => $ertek)
        echo "<p>" . $kulcs . ". " . $ertek . " eves</p>";
}

function Nested1()
{
    $jozsi = array("nev"=>"Kiss Jozsef", "eletkor"=>38, "foglalkozas"=>"komuves");
    $feri = array("nev"=>"Humbak Ferenc", "eletkor"=>67, "magassag"=>178);
    $gizi = array("nev"=>"Kolompar Gizella", "gyermekek"=>4, "foglalkozas"=>"haztartasbeli");

    $emberek = array($jozsi, $feri, $gizi);

    for($i = 0; $i<sizeof($emberek); $i++){
        echo "<p>";
        foreach($emberek[$i] as $key => $value)
        {
            echo $key . ": " . $value;
            echo "<br>";
        }
        echo "</p>";
    }
}

function Nested2() 
{
    $konyvek = array(
                    "Programozas lepesrol lepesre" => array("szerzo"=>"Reiter Isvan", "ar"=>2500, "oldalak"=>450),
                    "Hamupipoke"=> array("szerzo"=>"Grimm testverek", "tipus"=>"mese"),
                    "Biblia" => array("tipus"=>"episztola", "ar"=>"eszmei erteku", "oldalak"=>1295));
    foreach($konyvek as $key => $value){
        echo "<h3" . $key . "</h3>";
        echo "<p>";
        foreach($value as $key2 => $value2){
            echo $key2 .  ": " . $value2;
            echo "<br>";
        }
        echo "</p>";
    }

    echo "<hr style='border: 1px solid lightpink;'>";
    echo $konyvek["Hamupipoke"]["szerzo"];

}

function Nested3(){
    $lotto = array(
        41 => array(1, 7, 39, 40,  58),
        40 => array(18, 33, 36, 48, 60),
        39 => array(12, 22, 24, 49, 65),
        38 => array(3, 16, 21, 43, 60),
        37 => array(7, 15, 19, 33, 71),
        36 => array(7, 10, 33, 34, 78),   
    );
    $output = "";

    foreach($lotto as $key => $value) {
        $output .= "<tr class='" . ($key%2==0?"paros":"paratlan") . "'>";
        $output .= "<th>" . $key . "</th>";
        for($i=0; $i<sizeof($value); $i++)
        {
            $output .= "<td>";
            $output .= $value[$i];
            $output .= "</td>";
        }
        $output .= "</tr>";
    }
    return $output;
}



?>