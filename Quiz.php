<?php
//access the global array called $_POST to get the values from the text fields
$total = 0;
$answer1 = $_POST["a"];
$answer2 = $_POST["b"];
$answer3 = $_POST["c"];
$answer4 = $_POST["d"];
$answer5 = $_POST["e"];


echo "Question1: What is the capital of Kansas?<br>";
echo "You answered: ".$answer1. "<br>";
echo "Correct answer: Topeka <br><br>";
if($answer1 == "Topeka")
    $total++;

echo "Question2: What is the capital of Missouri?<br>";
echo "You answered: ".$answer2. "<br>";
echo "Correct answer: Jefferson City <br> <br>";
if($answer2 == "Jefferson City")
    $total++;

echo "Question3: What is the capital of Arkansas?<br>";
echo "You answered: ".$answer3. "<br>";
echo "Correct answer: Little Rock <br> <br>";
if($answer3 == "Little Rock")
    $total++;

echo "Question4: What is the capital of Colorado?<br>";
echo "You answered: ".$answer4. "<br>";
echo "Correct answer: Denver <br> <br>";
if($answer4 == "Denver")
    $total++;

echo "Question5: What is the capital of Iowa?<br>";
echo "You answered: ".$answer5. "<br>";
echo "Correct answer: Des Moines <br> <br>";
if($answer5 == "Des Moines")
    $total++;

$score =$total/5*100;
echo "Your grade is " .$score. "%";
?>
