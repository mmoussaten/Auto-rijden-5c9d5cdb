<?php
 echo "Hoe oud ben je?";
$age = readLine("> ");
if ($age >= 16.50 ) {
    echo "Je mag beginnen met rijlessen";
} else if ($age < 16.50) {
    echo "Helaas, je mag nog niet beginnen met rijlessen!";
} else {
    echo "Er is een fout opgetreden";
}
