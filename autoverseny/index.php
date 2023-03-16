<?php
class Verseny {
    public $Csapat;
    public $Versenyzo;
    public $Eletkor;
    public $Palya;
    public $Korido;
    public $Kor;
    public $Hour;
    public $Minute;
    public $Second;
    public $TotalSecond;
    public function __construct($sor) {
        $adatok = explode(';', $sor);
        $this->Csapat = $adatok[0];
        $this->Versenyzo = $adatok[1];
        $this->Eletkor = intval($adatok[2]);
        $this->Palya = $adatok[3];
        $this->Korido = $adatok[4];
        $this->Kor = intval($adatok[5]);
        $this->Hour = intval(explode(':', $this->Korido)[0]);
        $this->Minute = intval(explode(':', $this->Korido)[1]);
        $this->Second = intval(explode(':', $this->Korido)[2]);
        $this->TotalSecond = $this->Hour * 3600 + $this->Minute * 60 + $this->Second;
    }
}

$versenyek = array();
$lines = file('autoverseny.csv');
foreach ($lines as $index => $sor) {
    if ($index == 0) continue; // skip header
    array_push($versenyek, new Verseny($sor));
}

echo "3. feladat: " . count($versenyek) . "\n";

$furgeFerencGranPrixCircuitHarmadikKorHanyMpAlatt = reset(
    array_filter($versenyek, function($x) {
        return $x->Versenyzo == "Fürge Ferenc" && $x->Palya == "Gran Prix Circuit" && $x->Kor == 3;
    })
)->TotalSecond;
echo "4. feladat: " . $furgeFerencGranPrixCircuitHarmadikKorHanyMpAlatt . " másodperc\n";

echo "5. feladat:\nKérem a versenyző nevét!\n";
$nev = trim(fgets(STDIN));

$filtered = array_filter($versenyek, function($x) use ($nev) {
    return $x->Versenyzo == $nev;
});
if (count($filtered) == 0) {
    echo "6. feladat: Nincs ilyen versenyző az állományban!\n";
} else {
    $sorted = array_values($filtered);
    usort($sorted, function($a, $b) {
        return $a->TotalSecond - $b->TotalSecond;
    });
    $bekertNevHolEsMennyiIdoAlattFutottaLeALeggyorsabbKoret = reset($sorted);
    echo "6. feladat: " . $bekertNevHolEsMennyiIdoAlattFutottaLeALeggyorsabbKoret->Palya . ", " . $bekertNevHolEsMennyiIdoAlattFutottaLeALeggyorsabbKoret->Korido . "\n";
}
?>
