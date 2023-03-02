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

    public function Koltseg() {
        $kolcsonzesIdejePercben = ($this->VOra * 60 + $this->VPerc) - ($this->EOra * 60 + $this->EPerc);
        $koltseg = ceil($kolcsonzesIdejePercben / 30) * 2400;
        return $koltseg;
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
?>
<doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
    body {
        zoom: 2;
    }
</style>
</head>
<body>
<?php
echo "5. feladat: Napi kolcsonzesek szama: " . count($kolcsonzesek);
echo "<br>";
echo "6. feladat: Kerek egy nevet: ";
?>
<form action="index.php" method="post">
    <input type="text" name="hatnev" placeholder="Keresett nev">
    <input type="submit" value="Keres">
</form>
<?php
if (isset($_POST['hatnev'])) {
    $hatnev = $_POST['hatnev'];
    $hat = false;
    if (preg_match('/^[a-zA-Z]+$/', $hatnev)) {
        if (strlen($hatnev) > 0) {
            echo "{$hatnev} kocsonzesei:<br>";
        }
        foreach ($kolcsonzesek as $i) {
            if ($i->Nev == $hatnev) {
                $hat = true;
                printf("%d:%02d-%d:%02d", $i->EOra, $i->EPerc, $i->VOra, $i->VPerc);
                echo "<br>";
            }
        }
        if (!$hat) {
            echo "Nem volt ilyen nevu kolcsonzo!<br>";
        }
    } else {
        echo "Nem megfelelo nev!<br>";
    }
}
echo "7. feladat: Adjon meg egy idopontot ora:perc alakban: ";
?>
<form action="index.php" method="post">
    <input type="text" name="idohet" placeholder="Idopont">
    <input type="submit" value="Keres">
</form>
<?php
if (isset($_POST['idohet'])) {
    $het = $_POST['idohet'];
    $oszto = explode(":", $het);
    $ElvitelIdejePercben = 0;
    $VisszahozatalIdejePercben = 0;
    $KolcsonzesIdeje = 0;
    echo "A vizen levo jarmuvek:<br>";
    foreach ($kolcsonzesek as $i) {
        $ElvitelIdejePercben = ($i->EOra * 60) + $i->EPerc;
        $VisszahozatalIdejePercben = ($i->VOra * 60) + $i->VPerc;
        $KolcsonzesIdeje = (intval($oszto[0]) * 60) + intval($oszto[1]);
        if ($ElvitelIdejePercben <= $KolcsonzesIdeje && $VisszahozatalIdejePercben >= $KolcsonzesIdeje) {
            echo "{$i->EOra}:{$i->EPerc}-{$i->VOra}:{$i->VPerc} : {$i->Nev}<br>";
        }
    }
}
$osszbevetel = 0;
foreach ($kolcsonzesek as $kolcsonzes) {
    $osszbevetel += $kolcsonzes->Koltseg();
}
echo "8. feladat: A napi bevetel: {$osszbevetel} Ft<br>";
$f = array_filter($kolcsonzesek, function($h) {
    return $h->JAzon == 'F';
});
$w = fopen('F.txt', 'w');
foreach ($f as $i) {
    fwrite($w, "{$i->EOra}:{$i->EPerc}-{$i->VOra}:{$i->VPerc} : {$i->Nev}<br>");
}
fclose($w);
echo "10. feladat: Statisztika<br>";
$a = array_filter($kolcsonzesek, function($h) { return $h->JAzon == 'A'; });
$b = array_filter($kolcsonzesek, function($h) { return $h->JAzon == 'B'; });
$c = array_filter($kolcsonzesek, function($h) { return $h->JAzon == 'C'; });
$d = array_filter($kolcsonzesek, function($h) { return $h->JAzon == 'D'; });
$e = array_filter($kolcsonzesek, function($h) { return $h->JAzon == 'E'; });
$f = array_filter($kolcsonzesek, function($h) { return $h->JAzon == 'F'; });
$g = array_filter($kolcsonzesek, function($h) { return $h->JAzon == 'G'; });
echo "A - " . count($a) . "<br>";
echo "B - " . count($b) . "<br>";
echo "C - " . count($c) . "<br>";
echo "D - " . count($d) . "<br>";
echo "E - " . count($e) . "<br>";
echo "F - " . count($f) . "<br>";
echo "G - " . count($g) . "<br>";
?>
</body>
</html>
