<?php
//Insbesondere Funktionen

//Aufgabe lasst euch per funktion die unten stehenden echo ausgeben:

/*echo "Hello World!";
echo "Hello World! My name is Anna";
echo "Hello World! I like Programming";
echo "Hello World! This BBQ-School is awesome";

echo " ''''''' "; */

function helloWorldPrint($txt)
{
    echo "Hello World! $txt <br>";
}
helloWorldPrint("");
helloWorldPrint("My name is Anna");
helloWorldPrint("I like Programming");
helloWorldPrint("This BBQ-School is awesome");

helloWorldPrint("My name is Anna. I like Programming. This BBQ-School is awesome");

function helloWorldPrintv1()
{
    echo "<pre>";
    echo "Hello World!\n";
    echo "Hello World! My name is Anna\n";
    echo "Hello World! I like Programming\n";
    echo "Hello World! This BBQ-School is awesome\n";

    echo " ''''''' ";
    echo "</pre>";
}
helloWorldPrintv1();

echo "</pre>";
