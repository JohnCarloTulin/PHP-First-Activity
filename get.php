<?php

if(isset($_GET['submitName'])){
  $firstvalue = $_GET['first_value'];
  $secondvalue = $_GET['second_value'];
  $thirdvalue = $_GET['third_value'];
  $answervalue = (($secondvalue * $secondvalue) - (4 * $firstvalue * $thirdvalue));

  echo "<h2>Answer: " .$answervalue;
}

?>