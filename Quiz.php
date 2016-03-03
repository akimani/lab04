<?php
//access the global array called $_POST to get the values from the text fields
$total = 0;
$answer1 = $_POST["a"];

echo "Question1: What is the capital of Kansas:?<br>";
echo "You answered: ".$answer1. "<br>";
echo "Correct answer: Topeka <br> <br><br>";
if($answer1 == "Topeka")
    $total++;
echo "Total " .$total. "<br>";


?>
