<?php
$a = 10;
$b = 20;
$c = 30;

$name= 'c';
echo $$name ;

echo '</br>';

$variables = array ('a' ,'b' ,'c');
foreach ($variables as $var) {
  echo $$var . '=> '. $$var **2;
  echo '</br>';
}
