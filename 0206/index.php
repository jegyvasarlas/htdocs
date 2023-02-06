<?php
$Persons = [];
$Persons[] = ['Nev' => 'Kiss Elek', 'Cim' => 'Budapest Etele ut 14','szDatum'=>'1988.12.15'];
$Persons[] = ['Nev' => 'Maci Laci', 'Cim' => 'Budapest Etele ut 17','szDatum'=>'1977.12.15'];
$Persons[] = ['Nev' => 'Mekk Elek', 'Cim' => 'Budapest Etele ut 18','szDatum'=>'1966.12.15'];

/*foreach ($Persons as $key => $value) {
    echo $value['Nev'] . ' ' . $value['Cim'] . ' ' . $value['szDatum'] . '<br>';
}

foreach ($Persons as $Person) {
    echo $Person['Nev'] . ' ' . $Person['Cim'] . ' ' . $Person['szDatum'] . '<br>';
}*/

class Text
{
    public function Kiir($Persons = null) {
        echo '<tr>';
        foreach ($Persons[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</tr>';
        foreach ($Persons as $key => $value) {
            echo '<tr>';
            foreach ($value as $key2 => $value2) {
                echo '<td>' . $value2 . '</td>';
            }
            echo '</tr>';
        }
    }
}
$peldany = new Text();
$peldany->Kiir($Persons);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <?php $peldany->Kiir($Persons); ?>
    </table>
</body>
