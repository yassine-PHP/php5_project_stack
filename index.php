<?php

$note1 = 10;
$note2 = 2;
$moyenne = ($note1 + $note2) / 2; // Added division by 2 for a real average
$etudiant = ['joe','ali','',['rick','yael']];
echo 'vous avez eu comme ancienne note ' . $note1 . "\n" .
     'et comme deuxieme ' . $note2 . "\n" .
     'votre moyenne est ' . $moyenne ."\n";
echo $etudiant[0] ."\n".$etudiant[3][0]."";   
print_r($etudiant);

?>

