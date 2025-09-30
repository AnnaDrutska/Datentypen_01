<?php

//Erstelle 4 Variablen:
//1. Zahl
//2. Eine Zahl mit Komma
//3. Ein Wort
//4. ein Boolean (True)

// Prüfe, ob dein Wort (String) den Text, "Hello World" beinhaltet, falls nicht, ändere ihn und lass dir die Variable als echo

$Zahl = 12;

$Kommazahl = 11.0;

$Wort = 'Programmierung';

$Wahrheit = true;


if ($Zahl == $Kommazahl) {
    echo "Beide sind inhaltlich gleich <br>";
} else {
    echo "Inhaltlich nicht gleich <br>";
}

// Vergleiche das Wort mit der Zahl und lasse dir einen Text ausgeben, ob diese beiden Datentypisch zusammenpassen oder nicht.
if ($Wort === $Zahl) {
    echo "Beide haben gleichen Datentyp <br>";
} else {
    echo "Datentypen sind nicht identisch <br>";
}

// Prüfe, ob die Zahl oder die Kommazahl größer als 10 ist und lass dir wieder einen Prüftext deiner Wahl ausgeben.
if ($Zahl > 10) {
    if ($Kommazahl > 10) {
        echo 'Beide Zahlen sind größer als 10.<br>';
    } else {
        echo 'Die Ganzzahl ist größer als 10, die Kommazahl nicht.<br>';
    }
} else {
    if ($Kommazahl > 10) {
        echo 'Die Kommazahl ist größer als 10, die Ganzzahl nicht.<br>';
    } else {
        echo 'Beide Zahlen sind kleiner oder gleich 10.<br>';
    }
}
// Prüfe, ob die Zahl oder die Kommazahl ein Boolean ist

if (is_bool($Zahl) || is_bool($Kommazahl)) {
    echo "Die Zahl $Zahl oder die Kommazahl $Kommazahl ist Boolean <br>";
} else {
    echo "Die Zahl $Zahl oder die Kommazahl $Kommazahl ist keiner Boolean <br>";
}

if ($Zahl === $Wahrheit && $Kommazahl === $Wahrheit)
{
    echo 'Beide True <br>';
}
elseif ($Zahl === $Wahrheit) //prüfen ob Zahl true ist... ansonsten
{
    echo 'Zahl ist ein Boolean; Kommazahl ist nicht <br>';
}
elseif($Kommazahl=== $Wahrheit) { //prüfen ob kommazahl true ist... ansonsten
    echo 'Kommazahl ist ein Boolean, Zahl ist nicht <br>';
}
else
{
    echo 'Beide sind kein Boolean <br>'; //alle beide sind keinerlei boolean oder nullen
}

// Prüfe, ob dein Wort (String) den Text "Hello World" beinhaltet. Falls nicht, ändere ihn und lass dir die Variable als echo

if (str_contains($Wort, "Hello World")) {
    echo "Das $Wort beinhaltet Hello World <br>";
} else {
    echo str_replace("Programmierung", "Hello World", $Wort);
}