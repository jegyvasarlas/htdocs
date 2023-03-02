<?php
class Kolcsonzesek {
    public $Nev;
    public $JAzon;
    public $EOra;
    public $EPerc;
    public $VOra;
    public $VPerc;

    public function __construct($sor) {
        $adatok = explode(';', $sor);
        $this->Nev = $adatok[0];
        $this->JAzon = $adatok[1][0];
        $this->EOra = (int)$adatok[2];
        $this->EPerc = (int)$adatok[3];
        $this->VOra = (int)$adatok[4];
        $this->VPerc = (int)$adatok[5];
    }
}

$kolcsonzesek = array();
$file = fopen('kolcsonzesek.txt', 'r');
$line_count = 0;
while (($line = fgets($file)) !== false) {
    $line_count++;
    if ($line_count > 1) {
        $kolcsonzesek[] = new Kolcsonzesek(trim($line));
    }
}
# ---------------------

echo "6. feladat: Kerek egy nevet: ";
$hatnev = trim(fgets(STDIN));
$hat = false;
echo "\t{$hatnev} kocsonzesei:\n";
foreach ($kolcsonzesek as $i) {
    if ($i->Nev == $hatnev) {
        $hat = true;
        printf("\t%d:%02d-%d:%02d\n", $i->EOra, $i->EPerc, $i->VOra, $i->VPerc);
    }
}
if (!$hat) {
    echo "Nem volt ilyen nevu kolcsonzo!\n";
}


?>
<doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
    * {
        zoom: 1.5;
    }
</style>
</head>
<body>
<?php
echo "5. feladat: Napi kolcsonzesek szama: " . count($kolcsonzesek);
?>
</body>
</html>
