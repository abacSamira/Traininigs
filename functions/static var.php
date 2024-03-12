<?php
// function for how many times a func call and static var in function.
product (10, 3);
product (20, 3);
product (30, 3);
product (40, 3);
product (150, 3);


function product ($a, $b){
    static $counter;
    $counter++ ;
    echo '<p>counter ='.$counter. '</p>';
  if ($counter>=5){
    echo '<p style ="color:red"> the function limit exceeded </p>';
    return ;

  }  
$p = $a * $b ;
echo '<p>'.$a. '*'.$b. '='. $p. '</p>';
}