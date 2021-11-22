<?php
    $q1q = $_POST["q1"];
    $q2q = $_POST["q2"];
    $q3q = $_POST["q3"];
    $q4q = $_POST["q4"];
    $q5q = $_POST["q5"];

    $correct = 0;
    $total = 5;

    $q1a = "Black";
    $q2a = "North America";
    $q3a = "EECS";
    $q4a = "Dolphins";
    $q5a = "56";

    echo "<p>Question 1: What color is the sky at night?<br>";
    echo "You awered: " . $q1q . "<br>";
    echo "The Correct awer: " . $q1a . "<br><br>";

    echo "Question 2: What continent is the US in?<br>";
    echo "You awered: " . $q2q . "<br>";
    echo "The Correct awer: " . $q2a . "<br><br>";

    echo "Question 3: What is the coolest major?<br>";
    echo "You awered: " . $q3q . "<br>";
    echo "The Correct awer: " . $q3a . "<br><br>";

    echo "Question 4: Who is the best NFL team?<br>";
    echo "You awered: " . $q4q . "<br>";
    echo "The Correct awer: " . $q4a . "<br><br>";

    echo "Question 5: What is 8x7?<br>";
    echo "You awered: " . $q5q . "<br>";
    echo "The Correct awer: " . $q5a . "<br><br>";

    if($q1q == $q1a)
    {
      $correct++;
    }
    if($q2q == $q2a)
    {
      $correct++;
    }
    if($q3q == $q3a)
    {
      $correct++;
    }
    if($q4q == $q4a)
    {
      $correct++;
    }
    if($q5q == $q5a)
    {
      $correct++;
    }

    echo "Total Correct answers: " . $correct . "<br>";
    echo "Percentage: " . (($correct/$total)*100) . "% </p>";

?>
