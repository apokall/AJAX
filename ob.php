<?php

$numberOne = isset($_POST['numberOne'])?$_POST['numberOne']:NULL;
$numberTwo = isset($_POST['numberTwo'])?$_POST['numberTwo']:NULL;
$plus = isset($_POST['plus'])?$_POST['plus']:NULL;
$minus = isset($_POST['minus'])?$_POST['minus']:NULL;
$multiply = isset($_POST['multiply'])?$_POST['multiply']:NULL;
$degree = isset($_POST['degree'])?$_POST['degree']:NULL;

if ($plus == "plus") {
echo $numberOne + $numberTwo;
} if ($minus == "minus") {
  echo $numberOne - $numberTwo;
} if ($multiply == "multiply") {
  echo $numberOne * $numberTwo;
} if ($degree == "degree") {
    echo $numberOne / $numberTwo;
}


 ?>
