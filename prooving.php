<?php
//Hi, ich bin ein Kommentar
# ich bin auch ein Kommentar
#echo 'Hellooo World!'; // ich bin ein Ausgabe kein Consolen Log

//Variablen in PHP benötigen vor Ihrem Namen als $ Zeichen

$int_zahl = 3; //Deklariert als $zahl mit dem zugewiesenen Wert 3 (Definition)

$wort = '3'; //Hier wird der Wert 3 als String gespeichert

$float_zahl = 3.14; //Hier wird der Wert 3.14 als Float gespeichert

$bool_wahr = true; //Hier wird der Wert true als Boolean gespeichert

$bool_falsch = false; //Hier wird der Wert false als Boolean gespeichert



if ($int_zahl !== $wort) //Prüft Genauestens, ob die Variablen von gleichem Typ sind
    {
        echo $bool_wahr;
    }
else //falls nicht, gebe das aus
    {
        echo $bool_falsch;
    }

    //Vergleichsoperatoren

    //== und === (das eine prüft inhaltlich das andere zusätzlich den Datentyp)
    //!= (nicht gleich) !== (nicht inhaltlich gleich und vom gleichen Datentyp)
    //& (Und) || (Oder)

    //Modulo Operator (Restrechner)

    //echo $int_zahl % 2;